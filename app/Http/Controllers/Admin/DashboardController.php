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
        $products = $restaurant->products;
        return view('admin.dashboard', compact('restaurant', 'products'));
    }
}
