{{-- @component('mail::message') --}}
# Download Your Map





{{-- @component('mail::button', ['url' => asset('storage/' . $payment->pdf_file)])
Download Map
@endcomponent
<p>ကျေးဇူးတင်ပါတယ်။<br>DPS Map Team</p>
{{ config('app.name') }}
@endcomponent --}}

{{-- <p>
    <a href="{{ url('download/map/' . $order->id) }}">
        Click here to download your map
    </a>
</p> --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Order Confirmation Email</title>
  <style>
    body {
      margin: 0;
      background-color: #6dbdc0ff;
      font-family: Arial, sans-serif;
      color: #ffffff;
    }
    .container {
      max-width: 600px;
      margin: auto;
      padding: 20px;
      background-color: #d68c8cff;
      border-radius: 10px;
    }
    .header {
      text-align: center;
      margin-bottom: 20px;
    }
    .summary {
      background-color: #f7f1f1ff;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
    }
    .summary h3 {
      margin: 0 0 10px;
    }
    .summary p {
      margin: 5px 0;
    }
    .download-btn {
      display: inline-block;
      background-color: #00d084;
      color: #000;
      padding: 12px 24px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
      margin-top: 20px;
    }
    .footer {
      margin-top: 30px;
      font-size: 12px;
      color: #aaa;
      text-align: center;
    }
    .footer a {
      color: #00d084;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h2>Welcome onboard!</h2>
      <p>မင်္ဂလာပါ {{ $payment->name }}</p>
      <p>သင့် payment ကိုအတည်ပြုပြီးပါပြီ။ အောက်ပါလင့်ခ်မှ PDF ဖိုင်ကို download ပြုလုပ်နိုင်ပါသည်။</p>
      <p><strong>Order Date:</strong> {{ $payment->created_at->format('d M Y H:i A') }}</p>
    </div>

    <div class="summary">
      <h3>Order Summary</h3>
      <p><strong>Customer Name:</strong> {{ $payment->name }}</p>
      <p><strong>Product:</strong> Map </p>
      <p><strong>Map_title:</strong> {{ $payment->map_title }}</p>
      <p><strong>Order ID:</strong> {{ $payment->id }}</p>
      <p><strong>Payment Status:</strong> {{ $payment->is_paid ? 'Approved' : 'Pending' }}</p>
      <p><strong>Amount:</strong> {{ $payment->amount }} MMK</p>
     </div>

    <p><strong>Payment Method:</strong> {{ $payment->payment_method }}</p><br>

    {{-- <a href="{{ asset('storage/maps/' . $payment->pdf_file) }}" class="download-btn">Download Receipt</a> --}}

    <div class="footer">
      <p>Need help? <a href="mailto:support@dpsmap.com">dpsmap.com</a> or call 09-775204020</p>
      <p>Follow us: <a href="#">Facebook</a>, <a href="#">Viber</a></p>
      <p>Don't want to receive these emails? <a href="#">Unsubscribe</a></p>
    </div>
  </div>
</body>
</html>
