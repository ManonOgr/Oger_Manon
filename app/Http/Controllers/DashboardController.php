<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index(){
        $category = Category::all();
        $products = Product::paginate(6);
        return view('dashboard', ['products' => $products]);
    }
}
