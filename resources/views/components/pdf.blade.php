@props([
'href' => '',
'title' => '',
'heading'=>'',
'date'=>''
])

<div {{ $attributes->merge(['class' => 'bread-crumb-large-area tmp-section-gapBottom pt--80 pt_md--40 pt_sm--40']) }}>
    <div class="container">
        <section class="tmp-top-contact-area mb-5">
            <div class="container text-center">
                <div class="row">
                    <div class="col-2">&nbsp;</div>
                    <div class="col-8 d-flex flex-column bg-primary py-5 rounded-3 shadow-lg text-white px-5 lh-lg">
                        <div class="text-center">
                            <h5 class="text-white">{{ $heading }}</h5>
                        </div>
                        <div>
                            <a href="{{ $href }}" download>
                                <img src="{{ asset('assets/images/pdf.svg') }}" alt="Download {{ $title }}"
                                    title="Download {{ $title }}" style="height: 96px;"
                                    class="shadow p-4 rounded-2 bg-danger pdf-icon" />
                            </a>
                        </div>
                        <div class="py-3"> {{ $title }} PDF</div>
                        <div class="py-3">Updated: {{$date}}</div>
                    </div>
                    <div class="col-2">&nbsp;</div>
                </div>
            </div>
        </section>
    </div>
</div>
