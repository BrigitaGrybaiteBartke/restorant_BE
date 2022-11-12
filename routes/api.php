<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// // be registracijos
// Route::resource('/restaurants', RestaurantController::class);
// Route::resource('/restaurants/:id', RestaurantController::class);
// Route::resource('/dishes', DishController::class);
// Route::resource('/dishes/:id', DishController::class);



// su registracija
Route::resource('/restaurants', RestaurantController::class, ['only' => ['index', 'show']]);
Route::resource('/restaurants', RestaurantController::class, ['except' => ['index', 'show']])->middleware('auth:sanctum');
Route::resource('/restaurants/:id', RestaurantController::class)->middleware('auth:sanctum');



Route::resource('/dishes', DishController::class, ['only' => ['index', 'show']]);
Route::resource('/dishes', DishController::class, ['except' => ['index', 'show']])->middleware('auth:sanctum');
Route::resource('/dishes/:id', DishController::class)->middleware('auth:sanctum');


// Registration routes
Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);
Route::post('/logout', [ApiAuthController::class, 'logout'])->middleware('auth:sanctum');

