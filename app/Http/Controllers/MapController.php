<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Map;

class MapController extends Controller
{
    //
    public function index()
    {
        $maps = Map::all(); // ဒါက database ထဲက map list အားလုံးကိုယူတယ်

    return view('admin.maps.index', compact('maps'));
        // return view('pages.maps');
    }
    // mapHome
     public function mapHome()
    {
        $maps = Map::all(); // ဒါက database ထဲက map list အားလုံးကိုယူတယ်

    return view('pages.maps', compact('maps'));
        // return view('pages.maps');
    }
     public function downloadFree(Request $request)
    {
        


    
        
    }

 

    public function buyMapForm()
    {
        return view('pages.buy');
    }

    public function submitPayment(Request $request)
    {
        // $city = $request->city;
        // $filePath = "maps/paid/{$city}-detail.pdf";
        $maps = Map::all();
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
