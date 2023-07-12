<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
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

        $orderMessage = '';
        $message = '';
        $sucess = false;
        $data = $request->all();
        $total = 0;

        $cart = $data['cart'];
        //calcolare il totale dell'ordine
        foreach ($cart as $item) {
            $product = Product::where('id', $item['id'])->first();
            $total += $product->price * $item['quantity'];
        }


        $result = $gateway->transaction()->sale([
            'amount' => $total,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => true
            ],
        ]);



        if ($result->success) {
            $data['status'] = 1;
            $orderMessage = 'I dati non sono stati salvati';
            $message = 'Il pagamento è stato effettuato';
            $sucess = true;
            $confNumb = 200;
            //
            //devo creare un ordine
            $order = new Order();
            $data['total'] = $total;
            $order->fill($data);
            $order->save();

            foreach ($cart as $item) {
                $order_product = new OrderProduct();
                $order_product->order_id = $order->id;
                $order_product->product_id = $item['id'];
                $order_product->product_quantity = $item['quantity'];
                $order_product->save();
            }
            if ($order && $order_product) {
                $orderMessage = 'I dati sono stati salvati';
            }
        } else {
            $message = 'La transazione è stata rifiutata';
            $sucess = false;
            $confNumb = 401;
        }

        $data = [
            'message' => $message,
            'success' => $sucess,
            'data_confirmation' => $orderMessage
        ];

        return response()->json($data, $confNumb);
    }
}
