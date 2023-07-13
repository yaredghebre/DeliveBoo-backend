<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
                $orders[] = $product->orders;
            }
        }
        return view('admin.dashboard', compact('restaurant', 'products', 'orders'));
    }
}
