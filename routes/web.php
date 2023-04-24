<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/women', function () {
    return view('women');
})->name('women');

Route::get('/men', function () {
    return view('men');
})->name('men');

Route::get('/soldes', function () {
    return view('soldes');
})->name('soldes');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');
