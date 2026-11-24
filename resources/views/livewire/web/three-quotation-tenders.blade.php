<div>
    <!-- Breadcrumb Start -->
    <!-- tmp breadcrumba area start -->
    <x-breadcrumb title="Three Quotation Tenders" watermark="Three Quotation Tenders"/>
    <!-- tmp breadcrumba area end -->
    <!-- Breadcrumb End -->

    <div class="bread-crumb-large-area tmp-section-gapBottom pt--80 pt_md--40 pt_sm--40">
        <div class="container">
            <table class="table table-striped mt-5">
                <thead>
                <tr>
                    <th class="text-center" scope="col-1">S.No.</th>
                    <th scope="col">Enquiry No.</th>
                    <th scope="col">Published On</th>
                </tr>
                </thead>
                <tbody>
                @php use Carbon\Carbon;$sn=0; @endphp
                @foreach($tenders as $tender)
                    @php $sn++; @endphp
                    <tr class="shadow-1">
                        <td class="col-1 text-center">{{ $sn }}</td>
                        <td class="col-9"><a href="{{ route('purchase-of-documents') }}">{{ $tender->enquiry_no }}</a></td>
                        <td class="col-2"><span
                                class="bg-primary text-white rounded-3 px-2 py-1">{{ Carbon::parse($tender->created_at)->format('M j, Y') }}</span>
                        </td>
                    </tr>
                    <tr class="shadow-1">
                        <td></td>
                        <td colspan="2">
                            {!! $tender->description !!}
                        </td>
                    </tr>
                    <tr class="shadow-1">
                        <td></td>
                        <td>Bid Closing Date</td>
                        <td>{{ Carbon::parse($tender->closing_date)->format('M j, Y') }}</td>
                    </tr>
                    <tr class="shadow-1">
                        <td></td>
                        <td>Bid Closing Time</td>
                        <td>{{ Carbon::parse($tender->closing_time)->format('g:i A') }}</td>
                    </tr>
                    <tr class="shadow-1">
                        <td></td>
                        <td>3Q Terms & Conditions:</td>
                        <td><a href="{{ asset('assets/pdfs/' . $tender->terms) }}" wire:navigate>View</a></td>
                    </tr>
                    <tr class="shadow-1">
                        <td></td>
                        <td>Item Specifications & Drawing:</td>
                        <td><a href="{{ asset('assets/pdfs/' . $tender->specifications) }}" wire:navigate>View</a></td>
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
