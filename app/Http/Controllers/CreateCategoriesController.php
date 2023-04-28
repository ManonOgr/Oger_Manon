<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class CreateCategoriesController extends Controller
{
    public function index(){
        return view('createcategories');
    }

    public function store(){
        
    }
}
