@component('mail::message')
# 🗺️ New Map Purchase Request

**Name:** {{ $details['name'] }}  
**Email:** {{ $details['email'] }}  
**Phone:** {{ $details['phone'] }}  
**Transaction No:** {{ $details['transaction_no'] }}  
**Amount:** {{ $details['amount'] }} MMK  
**Payment Method:** {{ ucfirst($details['payment_method']) }}

@component('mail::button', ['url' => url('/download/map/file.pdf')])
Download Map
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
