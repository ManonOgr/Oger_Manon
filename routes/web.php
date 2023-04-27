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

Route::get('/admin', [\App\Http\Controllers\AuthController::class, 'admin'])->name('auth.admin');
Route::delete('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');
Route::post('/admin', [\App\Http\Controllers\AuthController::class, 'doAdmin']);
Route::get('/home', [\App\Http\Controllers\AuthController::class, 'admin'])->name('auth.home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
