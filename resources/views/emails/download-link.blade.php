@component('mail::message')
# Download Your Map

<p>မင်္ဂလာပါ {{ $payment->name }}၊</p>

<p>သင့် payment ကိုအတည်ပြုပြီးပါပြီ။ အောက်ပါလင့်ခ်မှ ဖိုင်ကို download ပြုလုပ်နိုင်ပါသည်။</p>

@component('mail::button', ['url' => asset('storage/' . $payment->pdf_file)])
Download Map
@endcomponent
<p>ကျေးဇူးတင်ပါတယ်။<br>DPS Map Team</p>
{{ config('app.name') }}
@endcomponent

{{-- <p>
    <a href="{{ url('download/map/' . $order->id) }}">
        Click here to download your map
    </a>
</p> --}}


