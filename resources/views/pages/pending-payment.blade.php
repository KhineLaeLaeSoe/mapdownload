<!-- resources/views/pending-payment.blade.php -->
<h2>Scan  & Pay using  {{ ucfirst($payment->payment_method) }}</h2>
<img src="{{ asset('qr/' . $payment->payment_method . '.png') }}" width="300" />

<p>Please complete the payment and contact admin.</p>

{{-- For testing purpose --}}
<a href="{{ route('paid.map.download', $payment->id) }}">Download Map</a>
