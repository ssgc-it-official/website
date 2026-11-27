<div>
    <x-breadcrumb-with-image title="Financial Reports"/>

    <!-- Working Process Area Start -->
    <section class="tmp-working-process-area3 tmp-section-gap pt-5">
        <div class="container-3 pt-5">
            <div class="section-inner pt-5">
                <div class="row justify-content-center g-5">
                    @foreach ($reportsByYear as $year => $periods)
                        <h5 class="m-0 bg-gray-100 py-2 ps-0 mt-5">
                            <span class="bg-primary rounded-2 px-3 py-1 text-white shadow-1">{{ $year }}</span>
                        </h5>
                        @foreach ($periods as $periodTitle => $documents)
                            <div class="ps-3 m-0"><h6 class="mt-4 ps-3 mb-2">{{ $periodTitle }}</h6></div>
                            <ul class="m-0">
                                @foreach ($documents as $doc)
                                    <div class="ps-4">
                                        <li wire:key="doc-{{ $doc->id }}" class="m-1 ps-5 li-1">
                                            @if ($doc->file_path)
                                                <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank">
                                                    {{ $doc->document_title }}
                                                </a>
                                            @else
                                                {{ $doc->document_title }}
                                            @endif
                                        </li>
                                    </div>
                                @endforeach
                            </ul>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <style>
        .li-1 {
            list-style-type: disc;
            list-style-position: inside;
            padding-left: 15px;
        }

        li::marker {
            color: red;
            font-size: 1.3em;
        }
    </style>
    <!-- Working Process Area End -->
</div>
