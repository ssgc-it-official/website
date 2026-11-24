<div>
    <x-breadcrumb-with-image title="Board of Directors"/>

    <div class="bread-crumb-large-area tmp-section-gapBottom pt--80 pt_md--40 pt_sm--40">
        <div class="container">
            <div class="row">
                <!-- Team Area Start -->
                <section class="tmp-team-area tmp-section-gap">
                    <div class="container-3">
                        <div class="section-inner">
                            <div class="row g-5">
                                @foreach($directors as $director)
                                    <div class="col-xl-3 col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="1500"
                                         data-sal-delay="100">
                                        <div class="team-wrapper5 two">
                                            <div class="image-area">
                                                <a href="{{ route('director-profile', $director->id) }}">
                                                    <img src="{{ $director->getFirstMediaUrl('bod') }}"
                                                         alt="{{ $director->name }}" title="{{ $director->name }}">
                                                </a>
                                            </div>
                                            <div class="content-area">
                                                <div class="left">
                                                    <h2 class="title"><a
                                                            href="team-details.html">{{ $director->name }}</a></h2>
                                                    <p class="designation">{{ $director->type }}</p>
                                                </div>
                                                <a href="#" class="share"><i class="fa-regular fa-share-nodes"></i></a>
                                            </div>
                                            <div class="social-wrapper">
                                                {{--                                                <ul>--}}
                                                {{--                                                    <li>--}}
                                                {{--                                                        <a href="#">--}}
                                                {{--                                                            <i class="fa-brands fa-facebook-f"></i>--}}
                                                {{--                                                        </a>--}}
                                                {{--                                                    </li>--}}
                                                {{--                                                    <li>--}}
                                                {{--                                                        <a href="#">--}}
                                                {{--                                                            <i class="fa-brands fa-twitter"></i>--}}
                                                {{--                                                        </a>--}}
                                                {{--                                                    </li>--}}
                                                {{--                                                    <li>--}}
                                                {{--                                                        <a href="#">--}}
                                                {{--                                                            <i class="fa-brands fa-youtube"></i>--}}
                                                {{--                                                        </a>--}}
                                                {{--                                                    </li>--}}
                                                {{--                                                </ul>--}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{--                            <div class="pagination-area mt--60 mb_sm--50">--}}
                            {{--                                <ul>--}}
                            {{--                                    <li><i class="fa-solid fa-chevron-left"></i></li>--}}
                            {{--                                    <li>1</li>--}}
                            {{--                                    <li class="active">2</li>--}}
                            {{--                                    <li>3</li>--}}
                            {{--                                    <li><i class="fa-solid fa-chevron-right"></i></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </section>
                <!-- Team Area End -->
            </div>
        </div>
    </div>
</div>
