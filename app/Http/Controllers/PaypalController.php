<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

use PayPal\Api\Transaction;

use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\DB;
class PaypalController extends Controller
{
    /**
     * @throws \Throwable
     */
    public function create(Request $request)
    {
        $provider = new PayPalClient;
        $data = json_decode($request->getContent(), true);

        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);


        $order = $provider->createOrder([
            "intent"=> "CAPTURE",
            "purchase_units"=> [
                [
                    "amount"=> [
                        "currency_code"=> "USD",
                        "value"=> $data['amount']
                    ],
                    'description' => 'test'
                ]
            ],
        ]);
        $mergeData = array_merge($data,['status' => 'PENDING', 'vendor_order_id' => $order['id']]);
//        DB::beginTransaction();
//        Order::create($mergeData);
//        DB::commit();
        return response()->json($order);


        //return redirect($order['links'][1]['href'])->send();
        // echo('Create working');
    }

    /**
     * @throws \Throwable
     */
    public function capture(Request $request)
    {
        $provider = new PayPalClient;
        $data = json_decode($request->getContent(), true);
        $orderId = $data['orderId'];
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);
        $result = $provider->capturePaymentOrder($orderId);

//            $result = $result->purchase_units[0]->payments->captures[0];
        try {
            DB::beginTransaction();
            if($result['status'] === "COMPLETED"){
                $transaction = new \App\Models\Transaction();
                $transaction->vendor_payment_id = $orderId;
                $transaction->payment_gateway_id  = $data['payment_gateway_id'];
                $transaction->user_id   = $data['user_id'];
                $transaction->status   = 'COMPLETED';
                $transaction->save();
//                $order = Order::where('vendor_order_id', $orderId)->first();
//                $order->transaction_id = $transaction->id;
//                $order->status = TransactionStatus::COMPLETED;
//                $order->save();
                DB::commit();
            }
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
        }
        return response()->json($result);
    }
}
