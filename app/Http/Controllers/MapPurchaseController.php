<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\AdminMapPurchaseMail;
use App\Models\Payment;
use App\Models\MapPurchase; // Make sure this exists
use Illuminate\Support\Facades\Storage;

class MapPurchaseController extends Controller
{
    public function submitPayment(Request $request)
    {
        // dd($request->all());
        //  $data = $request->validate([
        // 'name' => 'required|string',
        // 'email' => 'required|email',
        // 'phone' => 'required|string',
        // 'transaction_no' => 'required|string|max:6',
        // 'amount' => 'required|numeric|min:100',
        // 'payment_method' => 'required|in:kbzpay,wavepay',
        // 'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        // ]);
     $filePath = $request->file('file')->store('payment-images');
        $payment = Payment::create($request->all());
        $payment['amount'] = $request->amount;
        if($payment['amount']){
            $payment['paid_at'] = now();
        }
        $payment->save();
        // dd($payment);
        if (!$payment) {
            return back()->withErrors(['error' => 'Payment submission failed. Please try again.']);
        } else {
            //  Mail::raw('This is a test email from DPS Map.', function ($message) {
            //  $message->to('e667479@gmail.com') // <-- ကိုယ့် Gmail သုံး
            //     ->subject('Test Email');
            Mail::send('emails.customer-map-request', ['payment' => $payment], function ($message) use ($payment, $filePath) {
            $message->to('admin@example.com') // ✅ Admin Email
                ->subject('🧾 New Map Payment with Image Attached')
                ->attach(storage_path('app/' . $filePath));
    });
    

            // Admin Notification (Optional)
            // Mail::to($payment['email'])->send(new AdminMapPurchaseMail($payment));

            return back()->with('success', 'ငွေပေးချေမှု တင်သွင်းပြီးပါပြီ။ Admin များမှ အတည်ပြုပြီး ပြန်လည်ဆက်သွယ်ပါမည်။');
        }
    }

    public function approve($id)
    {
        $purchase = Payment::findOrFail($id); // Or MapPurchase::findOrFail if that's the right model
        $purchase->status = 'approved';
        $purchase->save();

        // Send download email
        Mail::send('emails.map-download', ['purchase' => $purchase], function ($message) use ($purchase) {
            $message->to($purchase->email)
                    ->subject('Your Map Download Link');
        });

        return redirect()->back()->with('success', 'Approved and email sent.');
    }

    public function download($id)
    {
        $purchase = Payment::findOrFail($id); // Or MapPurchase::findOrFail

        if ($purchase->status !== 'approved') {
            abort(403, 'Unauthorized to download this file.');
        }

        return Storage::download($purchase->pdf_file); // Make sure path is correct
    }
}
