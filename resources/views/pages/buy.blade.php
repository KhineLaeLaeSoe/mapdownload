<!-- resources/views/payment-form.blade.php -->
 {{-- @extends('layouts.temp')
@section('title', 'Maps Page') --}}

  {{-- @push('meta')
    <meta name="keyword" content="Map download">
    <meta name="description" content="jpg,pdf maps download">
@endpush --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome to the Map Download Service</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    
/* Navbar */
.navbar {
  background-color: #fff;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
  position: sticky;
  top: 0;
  z-index: 1000;
}

.navbar .container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 0;
}

.logo {
  font-size: 1.5rem;
  font-weight: bold;
  color: #1e3a8a;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 2rem;
}

.nav-links a {
  color: #333;
  padding-bottom: 4px;
  border-bottom: 2px solid transparent;
  transition: all 0.3s;
}

.nav-links a:hover,
.nav-links .active {
  color: #1d4ed8;
  border-color: #1d4ed8;
}

.menu-toggle {
  display: none;
  font-size: 1.5rem;
  background: none;
  border: none;
}

/* Responsive Menu */
@media (max-width: 768px) {
  .nav-links {
    display: none;
    flex-direction: column;
    background: #fff;
    padding: 1rem;
    border-top: 1px solid #eee;
  }

  .nav-links.show {
    display: flex;
  }

  .menu-toggle {
    display: block;
  }
}

/* Header */
.page-header {
  text-align: center;
  padding: 3rem 1rem 2rem;
}

.page-header h1 {
  font-size: 2.5rem;
  color: #0f172a;
}

.page-header p {
  color: #64748b;
  margin-top: 0.5rem;
}

@media (max-width: 768px) {
    .form-container {
      padding: 1rem;
    }
    input, select {
      font-size: 1rem;
    }
  }

  label {
    font-weight: 500;
    margin-bottom: 0.25rem;
    display: block;
  }

  input[type="file"] {
    border: 1px solid #d1d5db;
    border-radius: 0.375rem;
    padding: 0.5rem;
    margin-top: 0.25rem;
    width: 100%;
  }

  button[type="submit"] {
    background-color: #1d4ed8;
    color: white;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    border-radius: 0.5rem;
    transition: background-color 0.3s ease;
  }

  button[type="submit"]:hover {
    background-color: #2563eb;
  }
</style>
</head>
<body>
     <!-- Navbar -->
  <nav class="navbar">
    <div class="container">
      <a href="/" class="logo">MyMaps</a>
      <ul class="nav-links" id="navLinks">
        <li><a href="/">Home</a></li>
        <li><a href="/maps" class="active">Maps</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
       
      </ul>
      <button id="menuToggle" class="menu-toggle">☰</button>
    </div>
  </nav>
<header class="page-header">
    <h2>Welcome to the Map Download Service</h2>
   
  </header>
  <!-- Payment Form UI -->
<div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <marquee behavior="scroll" direction="left" style="color blue" scrollamount="5" class="text-blue-700 font-medium mb-4">
    📢 "ကျေးဇူးပြုပြီး ဖောင်တွင် အချက်အလက်အားလုံးကို မှန်ကန်စွာဖြည့်ပြီး ပေးချေမှုအထောက်အထားဓာတ်ပုံကို တင်သွင်းရန် မမေ့ပါနှင့်။pdf file ဝယ်ယူမှုအတွက် ကျေးဇူးအထူးတင်ရှိပါသည်။
</marquee>
       
    
        <form method="POST" action="{{ route('buyMap') }}" class="space-y-5" enctype="multipart/form-data">
            @csrf
             @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4" style="text-align: center;background-color: #000000ff; color: #f7fff9ff;">
                {{ session('success') }}
            </div>
        @endif

         @if(request('title'))
        <div class="mb-4 p-4 bg-blue-100 rounded">
            <strong>You are buying:</strong> {{ request('title') }}
        
    @endif 
             
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
                         class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Enter your email"
                    @error('email') is-invalid 
                    @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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

           <div>
             <label for="transaction_no" class="block text-gray-700 text-sm font-semibold mb-2">
               Enter Transaction No. (Last 6 digits):
            </label>
      <input
        type="number"
        name="transaction_no"
        id="transaction_no"
        required
        maxlength="6"
        inputmode="numeric"
        pattern="\d{6}"
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
        placeholder="e.g. 123456"
        title="Please enter exactly 6 digits" >
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
            <br>
            <div>
                <label for="file">Payment Image:</label>
               <input type="file" name="file" required><br>
            </div><br>

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
</div>
</section>