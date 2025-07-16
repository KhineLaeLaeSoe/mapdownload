<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Mail;


class PaymentController extends Controller
{  //
    public function index()
    {
        $payments = Payment::orderBy('created_at', 'desc')->get();
        return view('admin.maps.index', compact('index'));
    }
    public function approve($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->status = 'approved';
        $payment->is_paid = true;
        $payment->pdf_file = 'maps/paid/yangon-detail.pdf'; // ✅ send this file
        $payment->paid_at = now();
        $payment->save();

        // ✅ Send email with download link
        Mail::send('emails.download-link', ['payment' => $payment], function ($message) use ($payment) {
            $message->to($payment->email)
                ->subject(' Map Download Link Ready');
        });

        return back()->with('success', 'Approved and email sent to customer!');
    }
    

    public function sendPaymentReceipt($customerEmail, $customerName, $amount)
{
     
    $data = [
        'customerName' => $customerName,
        'amount' => number_format($amount),
        'date' => now()->format('Y-m-d H:i'),
    ];

    Mail::send('emails.payment-receipt', $data, function ($message) use ($customerEmail) {
        $message->to($customerEmail)
                ->subject('Payment Receipt from DPS Map');
    });
//     $request->validate([
//     'name' => 'required|string|max:255',
//     'phone' => 'required|string|max:20',
//     'email' => 'required|email',
//     'map_title' => 'required|string',
//     'payment_method' => 'required|string',
//     // Add others if needed
// ]);
}
}
