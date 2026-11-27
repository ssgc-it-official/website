<x-mail::message>
    # Customer Complaint Submission

    A new complaint has been registered with the following details:

    <x-mail::table>
        | Field | Details |
        | :--- | :--- |
        | **Customer Type** | {{ ucfirst($complaintData['customer_type']) }} |
        | **Customer Number** | {{ $complaintData['customer_number'] }} |
        | **Meter Number** | {{ $complaintData['meter_number'] }} |
        | **Name** | {{ $complaintData['name'] }} |
        | **Designation** | {{ $complaintData['designation'] ?: 'N/A' }} |
        | **Company** | {{ $complaintData['company'] ?: 'N/A' }} |
        | **Address** | {{ $complaintData['address'] }} |
        | **City** | {{ $complaintData['city'] }} |
        | **State / Province** | {{ $complaintData['state'] }} |
        | **Post Code** | {{ $complaintData['post_code'] ?: 'N/A' }} |
        | **Email** | {{ $complaintData['email'] }} |
        | **Phone** | {{ $complaintData['phone'] }} |
    </x-mail::table>

    **Message / Complaint Details:**
    <x-mail::panel>
        {{ $complaintData['message'] }}
    </x-mail::panel>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
