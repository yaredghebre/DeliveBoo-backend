<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function getRestaurants(Request $request)
    {
        $query = Restaurant::with(['types']);

        if ($request->has('type_id')) {
            $query->whereHas('types', function ($q) use ($request) {
                $q->whereIn('id', $request->type_id);
            });
        }

        $restaurants = $query->paginate(10);

        return response()->json([
            'success' => true,
            'results' => $restaurants
        ]);
    }

    //Route for single restaurant
    public function getRestaurant(Request $request)
    {
        $success = false;

        if ($request->has('restaurant_id')) {
            $query = Restaurant::where('id', $request->restaurant_id);
            $success = true;
        }
        if ($request->has('restaurant_name')) {
            $query = Restaurant::where('name', 'like', '%' . $request->restaurant_name . '%');
            $success = true;
        }
        if ($request->random === 'true') {
            $query = Restaurant::inRandomOrder()->limit(6);
            $success = true;
        }
        $restaurants = $query->get();
        if (!$success) {
            $success = false;
            $restaurants = 'Not Found';
        };


        return response()->json([
            'success' => $success,
            'results' => $restaurants
        ]);
    }

    //Route for products request
    //TO DO: create a specific controller
    public function getProducts(Request $request)
    {
        if ($request->has('restaurant_id')) {
            $success = true;
            $results = Product::where('restaurant_id', $request->restaurant_id)->get();
        } else {
            $success = false;
            $results = 'error:restaurant not found';
        }
        return response()->json([
            'success' => $success,
            'results' => $results,
        ]);
    }
}
