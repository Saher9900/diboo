<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index');
Route::resource('/products', ProductController::class);
Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');
