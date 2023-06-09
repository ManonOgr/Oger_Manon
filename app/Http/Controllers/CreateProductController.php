<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Contracts\View\View;

class CreateProductController extends Controller
{
    public function index(){
        $categories = \App\Models\Category::all();
        return view('createproduct', ['categories'=>$categories]);

    }

    public function store(Request $request){
       $product = Product::create([            'product_name'=>$request->input('name'),
        'product_category'=>$request->input('categories'),
        'product_price'=>$request->input('price'),
        'product_picture'=>$request->input('image'),
        'product_reference'=>$request->input('name').$request->input('price'),
        'product_state'=>$request->input('state'),
        'product_description'=>$request->input('description'),

        ]);
return redirect('/products');
    }
}
