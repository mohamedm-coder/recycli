<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
  
            protected $fillable=['payer_id','payer_email','currency', 'payment_status','amount','payment_id'];
}
