<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);



Route::resource('products', App\Http\Controllers\ProductController::class);
