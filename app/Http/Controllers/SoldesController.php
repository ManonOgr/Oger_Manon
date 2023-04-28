<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Product;

class SoldesController extends Controller
{


    public function index(String $id)
    {
       $products = Product::where('product_state', $id)->simplePaginate(6);
       $quantity = Product::count();

        return view('soldes', ['products' => $products,'quantity' => $quantity]);
    }

}
