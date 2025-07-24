<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Buy Map</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<style>
  @keyframes marquee {
    0%   { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
  }

  .animate-marquee {
    animation: marquee 20s linear infinite;
    will-change: transform;
  }
</style>
</head>
<body class="bg-gray-100">
<nav class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
      <div class="flex items-center space-x-4">
        <a href="javascript:history.back()" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
          <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
               xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
          </svg>
          Back
        </a>
        <a href="{{ url('/') }}" class="text-blue-600 hover:text-blue-800 font-medium">Home</a>
      </div>
      <div>
        <span class="text-gray-600 font-semibold">Map Purchase</span>
      </div>
    </div>
    <div class="bg-yellow-100 text-yellow-800 py-2 px-4 overflow-hidden whitespace-nowrap relative">
  <div class="animate-marquee inline-block">
   📢 "ကျေးဇူးပြုပြီး ဖောင်တွင် အချက်အလက်အားလုံးကို မှန်ကန်စွာဖြည့်ပြီး ပေးချေမှုအထောက်အထားဓာတ်ပုံကို တင်သွင်းရန် မမေ့ပါနှင့်။pdf file ဝယ်ယူမှုအတွက် ကျေးဇူးအထူးတင်ရှိပါသည်။
  </div>
</div>
  </nav>
  <br>

  <div class="pt-20 min-h-screen flex items-center justify-center p-4">
    
  <div class="bg-white rounded-xl shadow-md w-full max-w-lg p-4 border border-gray-200">
    <h2 class="text-xl font-semibold text-center text-blue-700 mb-4">Buy Map Form</h2>

    <form method="POST" action="{{ route('buyMap') }}" class="space-y-4" enctype="multipart/form-data">
      @csrf

      @if (session('success'))
        <div class="text-center p-3 rounded bg-green-600 text-white text-sm">
          {{ session('success') }}
        </div>
      @endif

      @if(request('title'))
        <div class="bg-blue-100 text-blue-800 p-2 rounded text-center text-sm">
          <strong>You are buying:</strong> {{ request('title') }}
          <input type="hidden" name="title" value="{{ request('title') }}">
        </div>
      @endif

      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" name="name" id="name" required placeholder="Your name"
          class="mt-1 block w-full rounded-md border px-3 py-1.5 border-gray-300 focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="Email"
          class="mt-1 block w-full rounded-md border px-3 py-1.5 border-gray-300 focus:ring-2 focus:ring-blue-500">
        @error('email')
          <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
      </div>

      <div>
        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
        <input type="text" name="phone" id="phone" required placeholder="Phone"
          class="mt-1 block w-full rounded-md border px-3 py-1.5 border-gray-300 focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="transaction_no" class="block text-sm font-medium text-gray-700">Transaction No.</label>
        <input type="number" name="transaction_no" id="transaction_no" maxlength="6" required placeholder="Last 6 digits"
          class="mt-1 block w-full rounded-md border px-3 py-1.5 border-gray-300 focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="amount" class="block text-sm font-medium text-gray-700">Top-up Amount</label>
        <input type="number" name="amount" id="amount" min="100" required placeholder="Amount"
          class="mt-1 block w-full rounded-md border px-3 py-1.5 border-gray-300 focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="payment_method" class="block text-sm font-medium text-gray-700">Payment Method</label>
        <select name="payment_method" id="payment_method" required
          class="mt-1 block w-full rounded-md border px-3 py-1.5 bg-white border-gray-300 focus:ring-2 focus:ring-blue-500">
          <option value="kbzpay">KBZPay</option>
          <option value="wavepay">WavePay</option>
        </select>
      </div>

      <div>
        <label for="file" class="block text-sm font-medium text-gray-700">Payment Image</label>
        <input type="file" name="file" required
          class="mt-1 block w-full rounded-md border px-3 py-1.5 bg-white border-gray-300 focus:ring-2 focus:ring-blue-500">
      </div>

      <div class="text-center">
        <button type="submit"
          class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-5 py-1.5 rounded-md shadow-sm text-sm">
          Continue to Pay
        </button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
