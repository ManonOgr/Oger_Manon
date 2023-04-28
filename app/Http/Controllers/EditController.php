<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Contracts\View\View;

class EditController extends Controller
{
    public function index($id){
        $product = Product::findorfail($id);
        return view('editproduct', ['product' => $product]);
    }
}

