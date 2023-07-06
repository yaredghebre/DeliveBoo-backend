<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function getRestaurant(Request $request)
    {
        $query = Restaurant::with(['types']);

        if ($request->has('type_id')) {
            $query->whereHas('types', function ($q) use ($request) {
                $q->whereIn('id', [$request->type_id]);
            });
        }

        $restaurants = $query->paginate(10);

        return response()->json([
            'success' => true,
            'results' => $restaurants
        ]);
    }
}
