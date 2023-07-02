<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(){
        $restaurants=Restaurant::with(['products','types'])->paginate(10);
        return response()->json([
            'success'=>true,
            'results'=>$restaurants
        ]);
    }
}
