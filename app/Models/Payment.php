<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    // app/Models/Payment.php
// protected $fillable = ['name', 'phone', 'payment_method', 'is_paid', 'pdf_file', 'paid_at'];
  protected $fillable = [
    'name',
    'phone',
    'email',
    'transaction_no' => 'required|digits:6',
    'map_title',
    'payment_method',
    'is_paid',
    'pdf_file',
    'paid_at',
    'status'
// 'id','name','phone','email','map_title','pdf_file','payment_method','amount','paid_at''is_paid',
// 'created_at','updated_at','status'
 ];
//      $data = $request->only([
//            'name', 'email', 'phone', 'amount', 'payment_method', 'pdf_file', 'status'
//         ]);

// Payment::create($data);
}
