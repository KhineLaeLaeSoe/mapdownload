<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class MapController extends Controller
{
    //
    public function index()
    {
        return view('pages.maps');
    }
     public function downloadFree(Request $request)
    {
        // dd($request->all());
        $city = $request->city;
        // dd($city);
        //  <option value="yangon">Yangon</option>
        //            <option value="mandalay">Mandalay</option>
        //            <option value="myanmar">Myanmar Map(Mya)</option>
        //            <option value="pyinoolwin">Pyinoolwin Map</option>
        //            <option value="amarapura">Amarapura Map</option>
        //            <option value="taunggyi">Taunggyi Map</option>
        //             <option value="dagon">Dagon Map</option>

    // 1. Allow only valid city names
    $validCities = ['yangon', 'mandalay', 'myanmar', 'pyinoolwin', 'amarapura', 'taunggyi','dagon'];
    if (!in_array($city, $validCities)) {
        abort(400, 'Invalid city selected.');
    }
    // else {
        // dd($city);
    // }

    // 2. Try jpg / png
    $extensions = ['jpg', 'jpeg', 'png'];
    foreach ($extensions as $ext) {
        $path = storage_path("app/public/maps/free/{$city}.{$ext}");
        if (file_exists($path)) {
            dd($path);
            return response()->download($path, ucfirst($city) . "-Map.{$ext}");
        }
    }

    // 3. If no file found
    abort(404, 'Map image not found.');
}

    public function buyMapForm()
    {
        return view('pages.buy');
    }

    public function submitPayment(Request $request)
    {
        // $city = $request->city;
        // $filePath = "maps/paid/{$city}-detail.pdf";
        $payment_method = 'kbz';
         $payment = Payment::create([
            'name' => $request->name,
            'transaction_no' => $request->transaction_no,
            'phone' => $request->phone,
            'city' => $request->city,
            'payment_method' => $payment_method,
            // 'paid_at' => $paid_at,
            'amount' => $request->amount,
        ]);

        if($request->is_paid == 1){
            $payment['is_paid'] = 1;
            $payment['paid_at'] = now();
            $payment->save();
        }
       
        return redirect()->back();
    }

    public function downloadPaidMap($id)
    {
        $payment = Payment::findOrFail($id);

        if (!$payment->is_paid) {
            abort(403, 'Payment not completed yet.');
        }

        return response()->download(storage_path("app/{$payment->pdf_file}"));
    }

}
