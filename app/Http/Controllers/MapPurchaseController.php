<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminMapPurchaseMail;


class MapPurchaseController extends Controller
{
    //
     public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'transaction_no' => 'required|digits:6',
            'amount' => 'required|numeric|min:100',
            'payment_method' => 'required|string|in:kbzpay,wavepay',
        ]);

        // Admin ဆီကို Email ပေးပို့ခြင်း
        Mail::to('admin@example.com')->send(new AdminMapPurchaseMail($validated));

        return back()->with('success', 'ငွေပေးချေမှု တင်သွင်းပြီးပါပြီ။ Admin များမှ အတည်ပြုပြီး ပြန်လည်ဆက်သွယ်ပါမည်။');
    }
}
