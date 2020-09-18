<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        
        $products = Product::simplePaginate(9);

        return view('index', compact('products'));
    }
}
