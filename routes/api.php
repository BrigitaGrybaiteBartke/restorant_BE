<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RestaurantController;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/restaurants', RestaurantController::class, ['only' => ['index', 'show']]);
Route::resource('/restaurants', RestaurantController::class, ['except' => ['index', 'show']])->middleware('auth:sanctum');
Route::resource('/restaurants/:id', RestaurantController::class)->middleware('auth:sanctum');

Route::post('/dishes/rating', [RatingController::class, 'store']);

Route::resource('/dishes', DishController::class, ['only' => ['index', 'show']]);
Route::resource('/dishes', DishController::class, ['except' => ['index', 'show']])->middleware('auth:sanctum');
Route::resource('/dishes/:id', DishController::class)->middleware('auth:sanctum');

Route::get('/search/{key?}', [RestaurantController::class, 'searchRestaurant']);

Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);
Route::post('/logout', [ApiAuthController::class, 'logout'])->middleware('auth:sanctum');
