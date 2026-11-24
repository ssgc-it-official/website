@props(['title'])

<!-- Breadcrumb Start -->
<!-- tmp breadcrumba area start -->
<div class="tmp-bread-crumb-area bg-breadcrumb bg-image-breadcrumb bg_image">
    <div class="container-3">
        <div class="row">
            <div class="col-lg-12">
                <!-- bread crumb inner wrapper -->
                <div class="breadcrumb-inner ptb--100 ptb_sm--100 text-center">
                    <h1 class="title">{{ $title }}</h1>
                    <div class="meta">
                        <a href="{{ url('/') }}" class="prev"><i class="fa-solid fa-house"></i> Home</a>
                        <span><i class="fa-regular fa-chevron-right"></i></span>
                        <a href="#" class="next">{{ $title }}</a>
                    </div>
                </div>
                <!-- bread crumb inner wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- tmp breadcrumba area end -->
<!-- Breadcrumb End -->
