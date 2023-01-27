<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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

Route::get('/', function () {
    return view('index');
});


Route::get('index', function () {
    return view('index');
});

Route::get('about', function () {
    return view('aboutus');
});

Route::get('cities', function () {
    return view('cities');
});

Route::get('products', function () {
    return view('product');
});

Route::get('signin', function () {
    return view('signin');
});

Route::get('cart', function () {
    return view('cart');
});

Route::get('login', function () {
    return view('login');
});

Route::get('admin', function () {
    return view('admin');
});


route::get('register',[RegisterController::class,'create'])->middleware('guest');
route::post('register',[RegisterController::class,'store'])->middleware('guest');
route::post('logout',[SessionsController::class,'destroy']);
route::post('login',[SessionsController::class,'store'])->middleware('guest');

Route::post('checklogin',[RegisterController::class, 'checklogin']);
Route::get('admin',[RegisterController::class, 'view']);
Route::get('user/delete/{id}', [RegisterController::class, 'delete']);