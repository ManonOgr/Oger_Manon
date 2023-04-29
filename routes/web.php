<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WomenController;
use App\Http\Controllers\SoldesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\EditCategoriesController;
use App\Http\Controllers\CreateProductController;
use App\Http\Controllers\CreateCategoriesController;
use App\Http\Controllers\DeleteProductController;
use App\Http\Controllers\DeleteCategoriesController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/category/{id}', [WomenController::class, 'index'])->name('women');

Route::get('/soldes', [SoldesController::class, 'index'])->name('soldes');

Route::get('/product/{id}', [ProductController::class, 'index'])->name('product');

Route::get('/admin', [AuthController::class, 'admin'])->name('auth.admin');
Route::delete('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');
Route::post('/admin', [\App\Http\Controllers\AuthController::class, 'doAdmin']);

Route::get('/products', [DashboardController::class, 'index'])->name('products')->middleware('auth');

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories')->middleware('auth');

Route::get('/edit/{id}', [EditController::class, 'index'])->name('productedit')->middleware('auth');

Route::get('/editcategories/{id}', [EditController::class, 'index'])->name('editcategories')->middleware('auth');

Route::get('/createproduct', [CreateProductController::class, 'index'])->name('createproduct')->middleware('auth');

Route::get('/createcategories', [CreateCategoriesController::class, 'index'])->name('createcategories')->middleware('auth');

Route::post('/createnewcategories', [CreateCategoriesController::class, 'store'])->name('createnewcategories')->middleware('auth');

Route::post('/createnewproduct', [CreateProductController::class, 'store'])->name('createnewproduct')->middleware('auth');

Route::get('/delete/{id}', [DeleteProductController::class, 'deleteproduct'])->name('deleteproduct')->middleware('auth');

Route::get('/deletecategories/{id}', [DeleteCategoriesController::class, 'deletecategories'])->name('deletecategories')->middleware('auth');
