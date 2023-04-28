<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class WomenController extends Controller
{


    public function index($product_category) : View
    {
       $products = Product::where('product_category', $product_category)->orderBy('created_at', 'desc')->paginate(6);
       $quantity = Product::count();

        return view('women', ['products' => $products,'quantity' => $quantity]);
    }

}
