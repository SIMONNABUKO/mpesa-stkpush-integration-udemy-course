<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MpesaPayment extends Model
{
    //

    protected $fillable = ['MerchantRequestID','CheckoutRequestID','transaction_id','amount','phone','mpesa_receipt_number','mpesa_transaction_date'];
}
