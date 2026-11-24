<div>

    <x-breadcrumb-with-image title="Senior General Managers" watermark="Senior General Managers"/>

    <div class="bread-crumb-large-area tmp-section-gapBottom pt--80 pt_md--40 pt_sm--40">
        <div class="container">
            <div class="row">
                <!-- Team Area Start -->
                <section class="tmp-team-area tmp-section-gap">
                    <div class="container-3">
                        <div class="section-inner">
                            @foreach($sgms as $sgm)
                                <div class="row g-5 my-1">
                                    <div class="col-4 d-flex align-items-center bg-gray-300"
                                         data-sal="slide-up"
                                         data-sal-duration="2000"
                                         data-sal-delay="100">

                                        <div class="d-flex align-items-center gap-3">
                                            <div class="border-orange">
                                                <img src="{{ $sgm->getFirstMediaUrl('sgms') }}"
                                                     alt="{{ $sgm->name }}"
                                                     title="{{ $sgm->name }}"
                                                     style="height:150px;"
                                                     class="shadow">
                                            </div>

                                            <div class="ps-4 fw-bold">
                                                {{ $sgm->name }}
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-4 d-flex align-items-center bg-gray-200"
                                         data-sal="slide-up"
                                         data-sal-duration="2000"
                                         data-sal-delay="100">
                                        {{ $sgm->designation }}
                                    </div>

                                    <div class="col-4 d-flex align-items-center bg-gray-100"
                                         data-sal="slide-up"
                                         data-sal-duration="2000"
                                         data-sal-delay="100">
                                        {{ $sgm->department }}
                                    </div>
                                </div>
                    @endforeach
                </section>
                <!-- Team Area End -->
            </div>
        </div>
    </div>
</div>
