<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Services\MpesaService;
use Illuminate\Support\Facades\Auth;

class MpesaController extends Controller
{
    //

    public function checkout(Request $request, MpesaService $mpesaService)
    {
        if(!$request->phone){
            return response()->json(['status'=>'error', 'message'=>'Please enter your phone number']);
        }
        
        $amount = Cart::subtotal();
        $user = Auth::user();
        $payment_data = ['phone' => $request->phone, 'amount' => $amount,'user_id' => $user->id];
        $response = $mpesaService->stkPushInit($payment_data);
        return $response;
    }

    public function callback(Request $request)
    {
        $data = $request->all();
        $mpesaService = new MpesaService();
        $mpesaService->processCallbackData($data);
    }
}
