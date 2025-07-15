<!-- resources/views/pending-payment.blade.php -->
{{-- <h2>Scan  & Pay using  {{ ucfirst($payment->payment_method) }}</h2>
<img src="{{ asset('qr/' . $payment->payment_method . '.png') }}" width="300" />

<p>Please complete the payment and contact admin.</p>

{{-- For testing purpose --}}
{{-- <a href="{{ route('paid.map.download', $payment->id) }}">Download Map</a>  --}}
<p>မင်္ဂလာပါ {{ $purchase->customer_name }}၊</p>

<p>သင်ဝယ်ယူထားတဲ့ "{{ $purchase->map_title }}" ကို အောက်ပါ link မှာ download လုပ်နိုင်ပါတယ်။</p>

<p>
  <a href="{{ route('maps.download', $purchase->id) }}">
    Download {{ $purchase->map_title }}
  </a>
</p>

<p>ကျေးဇူးတင်ပါတယ်။<br>DPS Map Team</p>