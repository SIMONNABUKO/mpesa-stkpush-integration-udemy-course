<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MpesaTransaction extends Model
{
    //
    protected $fillable = ['MerchantRequestID','CheckoutRequestID','user_id','amount','phone'];
}
