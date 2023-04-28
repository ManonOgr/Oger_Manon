<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class CreateCategoriesController extends Controller
{
    public function index(){
        $categories = \App\Models\Category::all();
        return view('createcategories', ['categories'=>$categories]);

    }

    public function store(Request $request){
//dd($request->input('categories'));
       $categories = Category::create([
        'category_name'=>$request->input('categories'),
        ]);
return redirect('/categories');
    }
}
