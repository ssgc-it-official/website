<div>
    <x-breadcrumb title="Blacklisted Firms" watermark="Blacklisted Firms"/>

    <div class="bread-crumb-large-area tmp-section-gapBottom pt--80 pt_md--40 pt_sm--40">
        <div class="container">
            <div class="row">
                <table class="table table-striped mt-5 w-full">
                    <thead>
                    <tr>
                        <th scope="col">Firm Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Reasons</th>
                        <th scope="col">Type</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($firms as $firm)
                        <tr>
                            <td>{{ $firm->name }}</td>
                            <td class="px-2">{{ $firm->address }}</td>
                            <td class="px-2">{{ $firm->from }}</td>
                            <td class="px-2">{{ $firm->to }}</td>
                            <td class="px-2">{{ $firm->reasons }}</td>
                            <td class="px-2">{{ $firm->type }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-4">No records found.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
