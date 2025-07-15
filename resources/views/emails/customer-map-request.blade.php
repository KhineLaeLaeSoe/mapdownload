<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Payment Receipt</title>
</head>
<body>

  {{-- <!-- <p>မိတ်ဆွေ {{ $customerName }},</p> --> --}}
  <p><strong>Name:</strong> {{ $payment['name'] }}</p>
  <p><strong>Email:</strong> {{ $payment['email'] }}</p>
  <p><strong>Phone:</strong> {{ $payment['phone'] }}</p>
  <p><strong>Transaciation No:</strong> {{ $payment['transaction_no'] }}</p>
  <p><strong>Amount:</strong> {{ $payment['amount'] }} MMK</p>
  <p><strong>Payment_Method:</strong> {{ ucfirst($payment['payment_method']) }}</p>
  
  <p><strong>updated_up:</strong> {{ $payment['created_at'] }}</p>
  <p>သင့်အား ကျေးဇူးအထူးတင်ရှိပါတယ်။</p>
  <p>- DPS Map Team</p>
</body>
</html>