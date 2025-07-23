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
    
    $payment = Payment::findOrFail($id);

    // if($payment['map_title'] == 'Myeik Township')
    // {
    //         // $path = public_path('test');
       
    //     $filePath = public_path('assets/images/maps/Tanithary/Myeik.pdf');
    // } elseif($payment['map_title'] == 'Bokpyin Township') {
    //     $filePath = public_path('assets/images/maps/Tanithary/Bokpyin.pdf');
    // } elseif($payment['map_title'] == 'Dawei Township') {
    //     $filePath = public_path('assets/images/maps/Tanithary/Dawei.pdf');
    // } elseif($payment['map_title'] == 'Kawthoung Township') {
    //     $filePath = public_path('assets/images/maps/Tanithary/Kawthoung.pdf');
    // }else{
    //     // Optional: default file or error
    //     return back()->with('error', 'Map file not found for this township.');
    // }----
    $mapFiles = [
    'Ahlone Township' => public_path('assets/images/maps/Yangon/ahlone.pdf'),
    'Bahan Township' => public_path('assets/images/maps/Yangon/bahan.pdf'),
    'Dagon Township' => public_path('assets/images/maps/Yangon/dagon.pdf'),
    'Dagon Seikkan Township' => public_path('assets/images/maps/Yangon/dagon-seikkan.pdf'),
    'Dawbon Township' => public_path('assets/images/maps/Yangon/daw-bon.pdf'),
    'East Dagon Township' => public_path('assets/images/maps/Yangon/east-dagon.pdf'),
    'Hlaingtharyar East Township' => public_path('assets/images/maps/Yangon/hlaing-tharyar_east.pdf'),
    'Hlaingtharyar West Township' => public_path('assets/images/maps/Yangon/hlaing-tharyar_west.pdf'),
    'Kamaryut Township' => public_path('assets/images/maps/Yangon/kamaryut.pdf'),
    'Kyauktada Township' => public_path('assets/images/maps/Yangon/kyauk-tada.pdf'),
    'Kyi Myin Daing Township' => public_path('assets/images/maps/Yangon/kyi-myin-daing.pdf'),
    'Lanmadaw Township' => public_path('assets/images/maps/Yangon/lanmadaw.pdf'),
    'Latha Township' => public_path('assets/images/maps/Yangon/latha.pdf'),
    'Mayangone Township' => public_path('assets/images/maps/Yangon/mayangone.pdf'),
    'Mingalardon Township' => public_path('assets/images/maps/Yangon/mingalardon.pdf'),
    'North Dagon Township' => public_path('assets/images/maps/Yangon/north-dagon.pdf'),
    'North Okkalapa Township' => public_path('assets/images/maps/Yangon/north-okkalapa.pdf'),
    'Pabedan Township' => public_path('assets/images/maps/Yangon/pabedan.pdf'),
    'Sanchaung Township' => public_path('assets/images/maps/Yangon/sanchaung.pdf'),
    'Shwepyithar Township' => public_path('assets/images/maps/Yangon/shwe-pyi-thar.pdf'),
    'South Dagon Township' => public_path('assets/images/maps/Yangon/south-dagon.pdf'),
    'Tamwe Township' => public_path('assets/images/maps/Yangon/tarmwe.pdf'),
    'Thaketa Township' => public_path('assets/images/maps/Yangon/thaketa.pdf'),
    'Thingangyun Township' => public_path('assets/images/maps/Yangon/thingangyun.pdf'),
    'Yankin Township' => public_path('assets/images/maps/Yangon/yankin.pdf'),
    'South Okkalapa Township' => public_path('assets/images/maps/Yangon/south-okkalapa.pdf'),
    'Thanlyin Township' => public_path('assets/images/maps/Yangon/thanlyin.pdf'),
    'Botahtaung Township' => public_path('assets/images/maps/Yangon/botahtaung.pdf'),
    'Dala Township' => public_path('assets/images/maps/Yangon/dala.pdf'),
    'Hlaing Township' => public_path('assets/images/maps/Yangon/hlaing.pdf'),
    'Mingalar Taung Nyunt Township' => public_path('assets/images/maps/Yangon/mingalar-taung-nyunt.pdf'),
    'Pazundaung Township' => public_path('assets/images/maps/Yangon/pazundaung.pdf'),
    'Seikkan Township' => public_path('assets/images/maps/Yangon/seikkan.pdf'),
    'Seikkyi Khanaungto Township' => public_path('assets/images/maps/Yangon/seikkyi-khanaungto.pdf'),
    'Insein Township' => public_path('assets/images/maps/Yangon/insein.pdf'),
    'Dawei Township' => public_path('assets/images/maps/Tanithary/Dawei.pdf'),
    'Myeik Township' => public_path('assets/images/maps/Tanithary/Myeik.pdf'),
    'Bokpyin Township' => public_path('assets/images/maps/Tanithary/Bokpyin.pdf'),
    'Kawthoung Township' => public_path('assets/images/maps/Tanithary/Kawthoung.pdf'),
    'Tanintharyi Township' => public_path('assets/images/maps/Tanithary/Tanintharyi.pdf'),
];
    $mapTitle = $payment->map_title;
   if (!array_key_exists($mapTitle, $mapFiles)) {
    return back()->with('error', 'Map not found for this township.');
}
$filePath = $mapFiles[$mapTitle];

    $payment->update([
        'is_paid' => true,
        // 'pdf_file' => $path,
        'paid_at' => now(),
        'status' => 'approved',
        'download_expires_at' => now()->addMonth(), // ← expires in 1 month
    ]);

    // dd($payment->emai);

    //  Mail::send('emails.customer-map-request', ['payment' => $payment], function ($message) use ($payment, $filePath) {
    //         $message->to('admin@example.com') // ✅ Admin Email
    //             ->subject('approved Map Payment with Image Attached')
    //             ->attach(storage_path('app/' . $filePath));
    // });

    Mail::send('emails.download-link', ['payment' => $payment], function ($message) use ($payment, $filePath) {
    $message->to($payment->email)
        ->subject('Approved Map Payment with File')
        ->attach($filePath);


    //   Mail::send('emails.download-link', ['payment' => $payment], function ($message) use ($payment,$filePath) {
    //         $message->to($payment->email) // ✅ Admin Email
    //             ->subject('approved Map Payment with Image Attached');
    //             ->attach($filePath);
    });

    // Email to customer
    // Mail::to($payment->email)->send(new SendDownloadLink($payment));

    return back()->with('success', 'Payment approved and email sent!');
}


} 