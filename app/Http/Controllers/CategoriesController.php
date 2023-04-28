<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Contracts\View\View;

class CategoriesController extends Controller
{
    public function index() : View
    {
        $categories = Category::all();
        return view('categories', ['categories' => $categories]);
    }
}

