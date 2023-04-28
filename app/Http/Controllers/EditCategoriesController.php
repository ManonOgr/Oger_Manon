<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class EditCategoriesController extends Controller
{
    public function index($id){
        $categories = Product::findorfail($id);
        return view('editcategories', ['categories' => $categories]);
    }
}

