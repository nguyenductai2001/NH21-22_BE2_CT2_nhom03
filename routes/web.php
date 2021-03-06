<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/viewcart', function () {
    return view('viewcart');
});
Route::get('/store', function () {
    return view('store');
});
Route::get('/product', function () {
    return view('product');
});


