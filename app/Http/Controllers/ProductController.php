<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    public function index() : View
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(6);
        $quantity = Product::count();

        return view('products', ['products' => $products,'quantity' => $quantity]);
    }
}
