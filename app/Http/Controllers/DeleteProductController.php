<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Providers;

class DeleteProductController extends Controller
{
    public function deleteproduct($id){
        $product = Product::find($id);
        $product->delete();

    return redirect('/products');
    }
}
