<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class AdminMapController extends Controller
{
    //
    public function index()
    {
        $maps = Map::all();
        $maps = Map::latest()->get();
        // $payments = Payment::latest()->get();
        return view('admin.maps.index', compact('maps'));
    }

    public function create()
    {
        return view('admin.maps.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'file' => 'required|file|mimes:pdf,jpg,png',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|in:free,paid',
            'price' => 'nullable|numeric'
        ]);

         $mapPath = $request->file('file')->store('maps', 'public');
         // Image ကို သိမ်းမယ်
             $imageFile = $request->file('image');
             $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
             $imageFile->move(public_path('uploads/maps'), $imageName);
             $imagePath = 'uploads/maps/' . $imageName;

        Map::create([
            'title' => $request->title,
            'file_path' => $mapPath,
            'image' => $imagePath,
            'type' => $request->type,
            'price' => $request->price,
            
        ]);

         $request->validate([
         'title' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
     ]);

     $map = new Map();
     $map->title = $request->title;
     $map->type = $request->type;
       if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/maps'), $filename);
        $map->image = 'uploads/maps/' . $filename;
    }

    // $map->save();

    //     return redirect()->route('admin.maps.index')->with('success', 'Map uploaded!');
      return redirect()->route('admin.maps.index')->with('success', 'Map uploaded!');
     }

    public function destroy(Map $map)
    {
        Storage::delete($map->file_path);
        $map->delete();
        return back()->with('success', 'Map deleted.');
    }

    
// public function approve($id)
// {
//     $order = Order::findOrFail($id);
//     $order->status = 'approved';
//     $order->save();

//     // Email ပေးပို့
//     Mail::send('emails.download-link', ['order' => $order], function ($message) use ($order) {
//         $message->to($order->email)
//                 ->subject('Download Link for Your Map');
//     });

//     return redirect()->back()->with('success', 'Order approved and email sent.');
// }


}
