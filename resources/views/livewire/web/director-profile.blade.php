<div>
    <!-- Breadcrumb Start -->
    <!-- tmp breadcrumba area start -->
    <x-breadcrumb title="Director's Profile" watermark="Director's Profile"/>
    <!-- tmp breadcrumba area end -->
    <!-- Breadcrumb End -->

    <div class="bread-crumb-large-area tmp-section-gapBottom pt--80 pt_md--40 pt_sm--40">
        <div class="container">
            <div class="row">
                <!-- Director's Profile Start -->
                <section class="tmp-team-details-area tmp-section-gapBottom">
                    <div class="container-3">
                        <div class="section-inner">
                            <div class="row g-5 align-items-center">
                                <div class="col-lg-5">
                                    <div class="image-area">
                                        <img src="{{ $director->getFirstMediaUrl('bod') }}" alt="" style="height:300px;"/>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="team-content-area">
                                        <h2 class="title">{{ $director->name }}</h2>
                                        <h3 class="designation">{{ $director->type }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="team-about-area">
                                <h3 class="title">About {{ $director->name }}</h3>
                                {!! $director->profile !!}
                            </div>
                        </div>

                        <div class="single-component mt-5">
                            <a href="{{ url()->previous() }}" class="tmp-btn btn-primary button-flip btn-sm">
                                <span data-text="Back">Back</span>
                            </a>
                            <div class="menu-area d-xl-none d-block" id="menu-btn">
                                <div class="icon radius-small">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                                        <rect width="18" height="2" fill="#0C0A0A"></rect>
                                        <rect y="7" width="18" height="2" fill="#0C0A0A"></rect>
                                        <rect y="14" width="18" height="2" fill="#0C0A0A"></rect>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- Director's Profile Ends -->
            </div>
        </div>
    </div>
</div>
