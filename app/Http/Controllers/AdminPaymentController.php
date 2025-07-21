<?php

namespace App\Http\Controllers;
use App\Mail\SendDownloadLink;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Payment;



class AdminPaymentController extends Controller
{
    //
    
public function index()
{
    $payments = Payment::latest()->get();
    return view('admin.payments.index', compact('payments'));
}

public function approve(Request $request, Payment $payment,$id)
{
    // dd('asd');
    // $request->validate([
    //     'pdf_file' => 'required|file|mimes:pdf,jpg,png'
    // ]);

    // $path = $request->file('pdf_file')->store('maps');
    //  $filePath = 'https://dpsmap.com/assets/images/yangon/ahlone.jpg';
    $payment = Payment::findOrFail($id);

    $payment->update([
        'is_paid' => true,
        // 'pdf_file' => $path,
        'paid_at' => now(),
        'status' => 'approved',
    ]);

    // dd($payment->emai);

    //  Mail::send('emails.customer-map-request', ['payment' => $payment], function ($message) use ($payment, $filePath) {
    //         $message->to('admin@example.com') // ✅ Admin Email
    //             ->subject('approved Map Payment with Image Attached')
    //             ->attach(storage_path('app/' . $filePath));
    // });

      Mail::send('emails.download-link', ['payment' => $payment], function ($message) use ($payment) {
            $message->to($payment->email) // ✅ Admin Email
                ->subject('approved Map Payment with Image Attached');
                // ->attach(storage_path('app/' . $filePath));
    });

    // Email to customer
    // Mail::to($payment->email)->send(new SendDownloadLink($payment));

    return back()->with('success', 'Payment approved and email sent!');
}
}
