<div>
    <!-- Breadcrumb Start -->
    <!-- tmp breadcrumba area start -->
    <x-breadcrumb title="Active Tenders" watermark="Active Tenders"/>
    <!-- tmp breadcrumba area end -->
    <!-- Breadcrumb End -->

    <div class="bread-crumb-large-area tmp-section-gapBottom pt--80 pt_md--40 pt_sm--40">
        <div class="container">

            <section x-data="{ agreed: false }">
                <p><b>Note: Tender document is available online on SSGC website for view only. Bidder is eligible to
                        participate in bidding process only after purchasing the tender documents from Tender Room SSGC
                        Head
                        Office as per the procedure mentioned in the Press Publication / SSGC website.</b></p>

                <p><b>It is mandatory for
                        bidders to attach original Token Slip in front of the Sealed Envelope (issued at the time of
                        Purchasing)
                        as an evidence that supplier has purchased the Tender documents. Further, any
                        Corrigendum/Clarifications/Addendums/Extensions issued to be notified to only those bidders who
                        have
                        purchased Tender documents.</b></p>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkDefault" x-model="agreed">
                    <label class="form-check-label" for="checkDefault">
                        I agree/consent with above
                    </label>
                </div>

                <div id="docs" x-show="agreed" x-cloak class="mt-5">
                    <hr>

                    <h5>DOWNLOAD DOCUMENTS</h5>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col" class="col-6">Document Title</th>
                            <th scope="col">File</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($documents as $document)
                            <tr>
                                <td>{{ $document->title }}</td>
                                <td><a href="{{ asset('assets/pdfs/' . $document->file_name) }}" title="Download Document">{{ $document->file_name }}</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>
