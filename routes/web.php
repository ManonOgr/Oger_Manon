<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WomenController;
use App\Http\Controllers\SoldesController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/{id}', [WomenController::class, 'index'])->name('women');

Route::get('/solde/{id}', [SoldesController::class, 'index'])->name('soldes');

Route::get('/product/{id}', [ProductController::class, 'index'])->name('product');

Route::get('/admin', [\App\Http\Controllers\AuthController::class, 'admin'])->name('auth.admin');
Route::delete('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');
Route::post('/admin', [\App\Http\Controllers\AuthController::class, 'doAdmin']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');
