<div>
    <x-breadcrumb :title="$post->category->name" :watermark="$post->category->name" />

    <div class="tmp-section-gap">
        <div class="container">
            <h2 class="mb-2">{{ $post->title }}</h2>
            <small class="text-muted d-block mb-4">{{ $post->published_at->format('F j, Y') }}</small>

            @if ($cover = $post->getFirstMedia('cover'))
                <div class="mb-4">
                    {{ $cover->img('card', ['alt' => $post->title, 'class' => 'img-fluid rounded shadow']) }}
                </div>
            @endif

            @if ($post->body)
                <div class="mb-5">{!! nl2br(e($post->body)) !!}</div>
            @endif

            @if ($post->hasMedia('pdf'))
                <a href="{{ $post->getFirstMediaUrl('pdf') }}" target="_blank" rel="noopener"
                   class="tmp-btn btn-primary mb-5">View / Download PDF</a>
            @endif

            @if ($post->external_url)
                <a href="{{ $post->external_url }}" target="_blank" rel="noopener nofollow"
                   class="d-block mb-5">View original post</a>
            @endif

            @if ($post->hasMedia('gallery'))
                <h4 class="mb-3">Related images</h4>
                <div class="row g-4">
                    @foreach ($post->getMedia('gallery') as $image)
                        <div class="col-lg-4 col-md-6">
                            <a href="{{ $image->getUrl() }}" target="_blank">
                                {{ $image->img('card', ['alt' => $post->title, 'loading' => 'lazy', 'class' => 'img-fluid rounded']) }}
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
