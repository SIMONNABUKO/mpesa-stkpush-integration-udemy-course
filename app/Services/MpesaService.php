<?php

namespace App\Services;

use App\MpesaPayment;
use App\MpesaTransaction;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class MpesaService
{
    public function generatePassword()
    {
        $passkey = env('MPESA_PASSKEY');
        $short_code = env('MPESA_SHORT_CODE');
        $timestamp = date('YmdHis');
        $password = base64_encode($short_code . $passkey . $timestamp);
        return $password;
    }

    public function stkPushInit($payment_data)
    {
        try {
            $amount = $this->formatAmount($payment_data['amount']);
            $phone = $this->formatPhone($payment_data['phone']);
            Log::info('Phone:' . $phone);
            $data = [
                "BusinessShortCode" => env('MPESA_SHORT_CODE'),
                "Password" => $this->generatePassword(),
                "Timestamp" => date('YmdHis'),
                "TransactionType" => "CustomerPayBillOnline", //CustomerBuyGoodsOnline
                "Amount" => $amount,
                "PartyA" => $phone,
                "PartyB" => env('MPESA_PARTYB'), //important
                "PhoneNumber" => $phone,
                "CallBackURL" => "https://igslot.efitabu.co.ke/api/mpesa/process-data",
                "AccountReference" => "Test",
                "TransactionDesc" => "Test"
            ];
            $data_string = json_encode($data);
            $response_data = $this->stkInit($data_string);
            if (isset($response_data->ResponseCode) && $response_data->ResponseCode == 0) {
                $customer_message = $response_data->CustomerMessage;
                $transaction_data = ['MerchantRequestID' => $response_data->MerchantRequestID, 'CheckoutRequestID' => $response_data->CheckoutRequestID, 'user_id' => Auth::user()->id, 'amount' => $amount, 'phone' => $phone];
                MpesaTransaction::create($transaction_data);
                return response()->json(['status' => 'success', 'message' => $customer_message, 'data' => $response_data]);
            } else {
                return response()->json(['status' => 'error', 'message' => $response_data->errorMessage]);
            }
        } catch (\Throwable $th) {
            Log::error($th);
            return response()->json(['status' => 'error', 'message' => $th->getMessage()]);
        }
    }
    public function processCallbackData($data)
    {
        Log::info("Callback data:" . json_encode($data));
        try {
            $response_code = $data['Body']['stkCallback']['ResultCode'] ?? null;
            if ($response_code && $response_code == 0) {
                $payment_data = [
                    'MerchantRequestID' => $data['Body']['stkCallback']['MerchantRequestID'],
                    'CheckoutRequestID' => $data['Body']['stkCallback']['CheckoutRequestID'],
                    'amount' => $data['Body']['stkCallback']['CallbackMetadata']['Item'][0]['Value'],
                    'mpesa_receipt_number' => $data['Body']['stkCallback']['CallbackMetadata']['Item'][1]['Value'],
                    'phone' => $data['Body']['stkCallback']['CallbackMetadata']['Item'][4]['Value'],
                ];
                Log::info("payment data:" . json_encode($payment_data));
            } else {
                Log::error("Error processing callback data");
            }
        } catch (\Throwable $th) {
            Log::error($th);
        }
    }
    public function stkInit($data_string)
    {
        //url, data_string,headers(token)
        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $headers = array('Content-Type:application/json', 'Authorization:Bearer ' . $this->generateAccessToken());
        $data = $this->sendRequest($url, $data_string, $headers);
        return $data;
    }
    public function generateAccessToken()
    {
        //what we need to generate the token
        //consumer key
        //consumer secret
        //url
        //$data = base64_encode($consumer_key . ":" . $consumer_secret);
        //string = "yN561tp7idg9Lzm6td6l1i2sfP7uNAvK:L9G3GN5Kcq5rFGpt"
        //$base64 = base64_encode($string);


        $consumer_key = env('MPESA_CONSUMER_KEY');
        $consumer_secret = env('MPESA_CONSUMER_SECRET');
        $credentials = base64_encode($consumer_key . ":" . $consumer_secret);
        $url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
        $headers = array("Authorization: Basic " . $credentials, "Content-Type:application/json");
        $data = $this->sendRequest($url, null, $headers);
        $access_token = $data->access_token;
        return $access_token;
    }
    public function sendRequest($url, $data = null, $headers)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        if ($data) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        $curl_response = curl_exec($curl);
        $data = json_decode($curl_response);
        curl_close($curl);

        return $data;
    }
    public function formatAmount($amount)
    { // 1,000.00 -> 1000
        //40,000.00 -> 40000
        $amount = str_replace(',', '', $amount);
        $amount = str_replace('.00', '', $amount);
        return $amount;
    }

    public function formatPhone($phone)
    {
        //0726582228 -> 254726582228
        //0126582228 -> 254126582228
        //254726582228 -> 254726582228

        if (
            substr($phone, 0, 1) === "0"
        ) {
            $phone = "254" . substr($phone, 1);
        }
        return $phone;
    }
}
