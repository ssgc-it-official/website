@props(['title', 'watermark' => null])

<div class="tmp-bread-crumb-area bg-breadcrumb bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- bread crumb inner wrapper -->
                <div class="breadcrumb-inner ptb--100 ptb_sm--100 text-center">
                    {{-- If no watermark is passed, it falls back to the title --}}
                    <div class="watermark">{{ $watermark ?? $title }}</div>

                    <h1 class="title">{{ $title }}</h1>

                    <div class="meta">
                        <a href="{{ url('/') }}" class="prev">Home</a>
                        <span><i class="fa-regular fa-chevrons-right"></i></span>
                        <a href="#" class="next">{{ $title }}</a>
                    </div>
                </div>
                <!-- bread crumb inner wrapper end -->
            </div>
        </div>
    </div>
</div>
