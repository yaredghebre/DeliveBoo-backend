<?php

use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\API\RestaurantController;
use App\Http\Controllers\Api\TypesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route front-end data
Route::get('restaurants', [RestaurantController::class, 'getRestaurants']);
Route::get('restaurants/products', [RestaurantController::class, 'getProducts']);
Route::get('types', [TypesController::class, 'index']);

// Route for order
Route::post('order', [OrderController::class, 'index']);


//Route for payment
Route::get('generate/token', [PaymentController::class, 'generateToken']);
Route::post('make/payment', [PaymentController::class, 'makePayment']);
