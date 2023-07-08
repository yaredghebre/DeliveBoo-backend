<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index(Request $request)
    {
        $data = $request->all();
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
        if ($order && $order_product) {

            return ['data' => 'has been saved'];
        } else {
            return ['data' => 'not saved'];
        }
    }
}
