<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Models\Order;
use App\Models\OrderProduct;
use Braintree\Gateway;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function generateToken(Request $request, Gateway $gateway)
    {
        $token = $gateway->clientToken()->generate();
        $data = [
            'token' => $token,
            'success' => true
        ];
        return response()->json($data, 200);
    }

    public function makePayment(PaymentRequest $request, Gateway $gateway)
    {
        $result = $gateway->transaction()->sale([
            'amount' => $request->amount,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => true
            ],
        ]);
        if ($result->success) {
            $data = $request->all();
            $orderMessage = 'Data has been saved';
            //
            //devo creare un ordine
            $order = new Order();
            $order->fill($data);
            $order->save();

            foreach ($data['product_id'] as $index => $product_id) {
                $order_product = new OrderProduct();
                $order_product->order_id = $order->id;
                $order_product->product_id = $product_id;
                $order_product->product_quantity = $data['quantity'][$index];
                $order_product->save();
            }
            if (!($order && $order_product)) {

                $orderMessage = 'Data not saved';
            }
            $data = [
                'message' => 'Transazione Approvata',
                'success' => true,
                'data_confirmation' => $orderMessage
            ];
            $confNumb = 200;
        } else {
            $data = [
                'message' => 'Transazione Rifiutata',
                'success' => false,
                'data_confirmation' => 'Data not saved'
            ];
            $confNumb = 401;
        }
        return response()->json($data, $confNumb);
    }
}
