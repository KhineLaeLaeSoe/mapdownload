<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    //
    // public function showForm()
    // {
    //     return view('payment-form');
    // }

    // public function submitForm(Request $request)
    // {php artisan make:controller MapPurchaseController

    //     $payment = Payment::create([
    //         'name' => $request->name,
    //         'phone' => $request->phone,
    //         'payment_method' => $request->payment_method,
    //         'pdf_file' => 'pdfs/4000 essential word.pdf',
    //     ]);

    //     return view('pending-payment', compact('payment'));
    // }

    // public function downloadPDF($id)
    // {
    //     $payment = Payment::findOrFail($id);

    //     if (!$payment->is_paid) {
    //         abort(403, 'Payment not completed yet.');
    //     }

    //     return response()->download(storage_path('app/' . $payment->pdf_file));
    // }
}
