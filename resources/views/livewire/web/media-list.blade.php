<div>
    <x-breadcrumb :title="$category->name" :watermark="$category->name" />

    <div class="tmp-section-gap">
        <div class="container">
            <div class="row g-5">
                @forelse ($posts as $post)
                    @php($url = route('media.show', [$category->slug, $post->slug]))

                    <div class="col-lg-4 col-md-6" wire:key="post-{{ $post->id }}">
                        <a href="{{ $url }}" class="d-block mb-3">
                            {{ $post->thumbnail()?->img('card', [
                                'alt'     => $post->title,
                                'loading' => 'lazy',
                                'class'   => 'img-fluid rounded shadow',
                                'sizes'   => '(min-width: 992px) 33vw, (min-width: 768px) 50vw, 100vw',
                            ]) }}
                        </a>

                        <h4 class="mb-1"><a href="{{ $url }}">{{ $post->title }}</a></h4>
                        <small class="text-muted d-block mb-2">{{ $post->published_at->format('F j, Y') }}</small>

                        @if ($post->excerpt)
                            <p>{{ \Illuminate\Support\Str::limit($post->excerpt, 120) }}</p>
                        @endif

                        <a href="{{ $url }}">Read more…</a>
                    </div>
                @empty
                    <p class="text-center text-muted">Nothing published yet.</p>
                @endforelse
            </div>

            <div class="mt--60">{{ $posts->links() }}</div>
        </div>
    </div>
</div>
