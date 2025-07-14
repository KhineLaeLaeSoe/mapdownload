<!-- resources/views/payment-form.blade.php -->
 @extends('layouts.temp')
@section('title', 'Maps Page')
  @push('meta')
    <meta name="keyword" content="Map download">
    <meta name="description" content="jpg,pdf maps download">
@endpush
<div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <br>
          <br>
            <br>
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Buy Detailed Map</h2>

        <form method="POST" action="{{ route('buy.map.submit') }}" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Name:</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Enter your name"
                >
            </div>
            <div class="col-md-6">
                <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Email:</label>
                    <input id="email"
                         type="email"
                        class="form-control 
                    @error('email') is-invalid 
                    @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                     @error('email')
                         <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
            </div>

            <div>
                <label for="phone" class="block text-gray-700 text-sm font-semibold mb-2">Phone:</label>
                <input
                    type="text"
                    name="phone"
                    id="phone"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Enter your phone number"
                >
            </div>

            {{-- <div>
                <label for="city" class="block text-gray-700 text-sm font-semibold mb-2">Select City:</label>
                <select
                    name="city"
                    id="city"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                    <option value="yangon">Yangon</option>
                    <option value="mandalay">Mandalay</option>
                </select>
            </div> --}}
            <div>
    <label for="transaction_no" class="block text-gray-700 text-sm font-semibold mb-2">
        Enter Transaction No. (Last 6 digits):
    </label>
    <input
        type="text"
        name="transaction_no"
        id="transaction_no"
        required
        maxlength="6"
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
        placeholder="e.g. 123456"
    >
</div>

<div>
    <label for="amount" class="block text-gray-700 text-sm font-semibold mb-2">
        Enter Top-up Amount:
    </label>
    <input
        type="number"
        name="amount"
        id="amount"
        required
        min="100"
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
        placeholder="e.g. 1500"
    >
</div>


            <div>
                <label for="payment_method" class="block text-gray-700 text-sm font-semibold mb-2">Payment Method:</label>
                <select
                    name="payment_method"
                    id="payment_method"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                    <option value="kbzpay">KBZPay</option>
                    <option value="wavepay">WavePay</option>
                </select>
            </div>

            <button
                type="submit"
                 class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
            >
                Continue to Pay
            </button>
            
            </button>
            {{-- <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="marketing"
            > --}}
        </form>
    </div>
</div>
</section>