<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {

        // $category = Category::first();

        // dd($category->products);

        // exit();
        
        $products = Product::simplePaginate(9);
        $categories = Category::withCount('products')->get();

        // dd($categories);

        return view('index', compact('products', 'categories'));
    }
}
