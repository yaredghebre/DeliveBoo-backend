<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Mail\NewOrderEmail;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Braintree\Gateway;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $total = 0;
        $data = $request->all();

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
            $data['total'] = $total;
            $data['date_time'] = new DateTime();
            $orderMessage = 'I dati non sono stati salvati';
            $message = 'Il pagamento è stato effettuato';
            $sucess = true;
            $confNumb = 200;
            //
            //devo creare un ordine
            $order = new Order();
            $order->fill($data);
            $order->save();


            //tabella pivo order_product
            foreach ($cart as $item) {
                $order_product = new OrderProduct();
                $order_product->order_id = $order->id;
                $order_product->product_id = $item['id'];
                $order_product->product_quantity = $item['quantity'];
                $order_product->save();
            }
            if ($order && $order_product) {
                $orderMessage = 'I dati sono stati salvati';
                //invio e-mail
                Mail::to($order->customer_email)->send(new NewOrderEmail($order));
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
