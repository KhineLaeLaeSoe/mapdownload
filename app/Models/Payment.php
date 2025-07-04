<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    // app/Models/Payment.php
protected $fillable = ['name', 'phone', 'payment_method', 'is_paid', 'pdf_file', 'paid_at'];

}
