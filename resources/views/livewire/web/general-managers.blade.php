<div>
    <x-breadcrumb-with-image title="General Managers" watermark="General Managers"/>

    <div class="bread-crumb-large-area tmp-section-gapBottom pt_sm--40">
        <div class="container">
            <div class="row">
                <!-- Team Area Start -->
                <section class="tmp-team-area tmp-section-gap">
                    <div class="container-3">
                        <div class="section-inner">
                            @foreach($gms as $gm)
                                <div class="row g-5 my-1">
                                    <div class="col-4 d-flex align-items-center bg-gray-300"
                                         data-sal="slide-up"
                                         data-sal-duration="2000"
                                         data-sal-delay="100">

                                        <div class="d-flex align-items-center gap-3">
                                            <div class="border-orange">
                                                <img src="{{ $gm->getFirstMediaUrl('gms') }}"
                                                     alt="{{ $gm->name }}"
                                                     title="{{ $gm->name }}"
                                                     style="height:150px;"
                                                     class="shadow">
                                            </div>

                                            <div class="ps-4 fw-bold">
                                                {{ $gm->name }}
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-4 d-flex align-items-center bg-gray-200"
                                         data-sal="slide-up"
                                         data-sal-duration="2000"
                                         data-sal-delay="100">
                                        {{ $gm->designation }}
                                    </div>

                                    <div class="col-4 d-flex align-items-center bg-gray-100"
                                         data-sal="slide-up"
                                         data-sal-duration="2000"
                                         data-sal-delay="100">
                                        {{ $gm->department }}
                                    </div>
                                </div>
                    @endforeach
                </section>
                <!-- Team Area End -->
            </div>
        </div>
    </div>
</div>
