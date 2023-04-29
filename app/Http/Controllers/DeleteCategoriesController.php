<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Providers;

class DeleteCategoriesController extends Controller
{
    public function deletecategories($id){
        $categories = Category::find($id);
        $categories->delete();

    return redirect('/categories');
    }
}
