<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $restaurant = Auth::user()->restaurant;
        $orders = [];
        $products = [];
        if ($restaurant) {
            $products = $restaurant->products;
        }
        if ($products) {
            foreach ($products as $product) {
                if($product->orders->has('id')){
                    $orders[] = $product->orders;
                }
                dd($product->orders->get());
            }
            
        }
        return view('admin.dashboard', compact('restaurant', 'products', 'orders'));
    }
}
