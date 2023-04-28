<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index() : View
    {
        $products = Product::orderBy('created_at', 'desc')->simplePaginate(6);
        $quantity = Product::count();

        return view('home', ['products' => $products,'quantity' => $quantity]);
    }

}
