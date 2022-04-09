<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trainers;
use App\Http\Controllers\Base;
use App\Http\Controllers\Places;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Products;
use App\Http\Controllers\Plans;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  [Base::class, 'index']);

Route::get('/services', [Products::class, "get_products"]);

Route::get('/trainers', [Trainers::class, 'index']);
Route::get('/trainers/{id}', [Trainers::class, 'get_trainer_info']);

Route::get('/places/{id}', [Places::class, 'get_place_info']);

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/login', [Auth::class, "login_view"]);
Route::get('login_user', [Auth::class, "login_user"]);


Route::get('/registration', [Auth::class, 'register_view']);
Route::get('register_user', [Auth::class, 'register_user']);

Route::get('profile/{user_id}', [Auth::class, 'get_user_profile']);

Route::get('logout/', [Auth::class, 'logout']);


Route::get('products/{product_id}/order/', [Products::class, 'order_product']);
Route::get('plans/{order_id}/order/', [Plans::class, 'order_plan']);



