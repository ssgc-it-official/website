<div>
    <!-- Breadcrumb Start -->
    <x-breadcrumb title="Flame Magazine" watermark="Flame Magazine" />
    <!-- Breadcrumb End -->

    <div class="up-coming-events-grid tmp-section-gap">
        <div class="container-3">
            <div class="row g-5">

                @foreach ($issues as $issue)
                    <div class="col-lg-4 col-md-6 col-sm-12" wire:key="issue-{{ $issue->id }}">
                        <div class="single-events-area-grid">
                            <a href="{{ $issue->getFirstMediaUrl('pdf') }}" target="_blank"
                               rel="noopener" class="thumbnail">
                                {{ $issue->getFirstMedia('cover')?->img('cover', [
                                    'alt'     => $issue->title,
                                    'loading' => 'lazy',
                                    'sizes'   => '(min-width: 992px) 33vw, (min-width: 768px) 50vw, 100vw',
                                ]) }}
                            </a>

                            <div class="inner-content">
                                <div class="top-area mb--15">
                                    <div class="single">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <p>{{ $issue->published_at->format('F j, Y') }}</p>
                                    </div>
                                </div>

                                <a href="{{ $issue->getFirstMediaUrl('pdf') }}" target="_blank" rel="noopener">
                                    <h2 class="title">{{ $issue->title }}</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
