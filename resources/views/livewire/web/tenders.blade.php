<div>
    <!-- Breadcrumb Start -->
    <!-- tmp breadcrumba area start -->
    <x-breadcrumb title="Active Tenders" watermark="Active Tenders"/>
    <!-- tmp breadcrumba area end -->
    <!-- Breadcrumb End -->

    <div class="bread-crumb-large-area tmp-section-gapBottom pt--80 pt_md--40 pt_sm--40">
        <div class="container">
            <div class="row">
                <p><strong>Important Announcement</strong>: Effective from 12 September 2024, SSGC has revised its Fee/
                    Chagres for Press & Normal Tender, mentioned below.</p>
                <li class="li-1"><strong>Document Fee/Charges for Press Tender:</strong> The sale price of press tender
                    documents is
                    revised from Rs. 2,000 to <strong>Rs. 3,000.</strong></li>
                <li class="li-1"><strong>Document Fee/Charges for Normal Tender</strong>: The price for normal tender
                    documents is
                    revised from Rs. 1,000 to <strong>Rs. 1,500</strong>.
                </li>
                <br/>
                <p class="pt-4"><strong>V2: Note: As per SRO296(1)/2023 dated 08th March 2023 “E-Pak Procurement
                        Regulations, 2023”
                        all bidders are advised to register in e-Pak Acquisition and Disposal System (EPADS)</strong>
                </p>
                <p><strong>Important Notice:</strong><br/><br/>Public Procurement Regulatory Authority (PPRA) has
                    launched EPADS 2.0. As per the directive of the PPRA Authority, all bidders are advised to register
                    in EPADS 2.0. <a
                        href='https://vendors.epads.gov.pk/login'>https://vendors.epads.gov.pk/login</a><br/><br>In
                    order to do business with Sui Southern Gas Company (SSGC) in future, all bidders must register on
                    EPADS 2.0.</p>
                <p><strong>Special Note:</strong><br/><br/>In case of any grievances suppliers/ bidders must file
                    grievances through EPADS for EPADS tenders. Grievances submitted through any other platform will not
                    be entertained</p>
            </div>
            <table class="table table-striped mt-5">
                <thead>
                <tr>
                    <th class="text-center" scope="col">S.No.</th>
                    <th scope="col">Enquiry No.</th>
                    <th scope="col">Closing Date</th>
                    <th scope="col">Closing Time</th>
                    <th class="text-center" scope="col">Document Fee</th>
                </tr>
                </thead>
                <tbody>
                @php use Carbon\Carbon;$sn=0; @endphp
                @foreach($tenders as $tender)
                    @php $sn++; @endphp
                    <tr class="shadow-1">
                        <td class="col-1 text-center">{{ $sn }}</td>
                        <td class="col-5"><a href="{{ route('purchase-of-documents') }}"
                                             wire:navigate>{{ $tender->enq_no }}</a></td>
                        <td class="col-2"><span
                                class="bg-primary text-white rounded-3 px-2 py-1">{{ Carbon::parse($tender->bid_date)->format('M j, Y') }}</span>
                        </td>
                        <td class="col-2"><span
                                class="bg-primary text-white rounded-3 px-2 py-1">{{ Carbon::parse($tender->bid_time)->format('g:i A') }}</span>
                        </td>
                        <td class="col-2 text-center">Rs. {{ $tender->document_fee }}/-</td>
                    </tr>
                    <tr class="shadow-1">
                        <td></td>
                        <td colspan="4">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="border-0">{!! $tender->description !!}</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr class="shadow-1">
                        <td></td>
                        <td colspan="3">
                            <span style="color:#444;">
                            @if($tender->tenderstatus == '2')
                                    Only For Approved Contractors
                                @elseif(($tender->tenderstatus == '3'))
                                    Open Competitive Bidding
                                @elseif(($tender->tenderstatus == '4'))
                                    Negotiated Tender
                                @endif
                            </span>
                        </td>
                        <td class="text-end">
                            @if($tender->documents_count > 0)
                                <a href="{{ route('download-tender-documents', $tender->id) }}"
                                   class="d-inline-flex align-items-center text-decoration-none" wire:navigate>
                                    Download Document
                                    <img src="{{ asset('assets/images/pdf.svg') }}"
                                         style="height:24px; width:auto; margin-left:5px;">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr class="shadow-1">
                        <td class="my-3 border-0" colspan="5">&nbsp;</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
