<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $restaurant = Auth::user()->restaurant->with('categories');
        $orders = [];
        $products = [];
        if ($restaurant) {
            $products = $restaurant->products;
        }
        if ($restaurant) {
            $orders = Order::whereHas('products', function ($q) use ($restaurant) {
                $q->where('restaurant_id', $restaurant->id);
            })->get();
        }


        return view('admin.dashboard', compact('restaurant', 'products', 'orders'));
    }
}
