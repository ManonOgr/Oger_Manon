<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Product;

class SoldesController extends Controller
{


    public function index()
    {
       $products = Product::where('product_state', 'solde')->paginate(6);
       $quantity = Product::count();

        return view('soldes', ['products' => $products,'quantity' => $quantity]);
    }

}
