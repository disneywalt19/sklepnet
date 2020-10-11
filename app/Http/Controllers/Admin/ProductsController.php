<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Requests\UpdateProduct;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {

        $products = Product::with('category')
        ->orderBy('category_id', 'asc')
        ->paginate(12);


        $count['users'] = User::count();
        $count['products'] = Product::count();
        $count['orders'] = Order::count();

        return view('admin.products.index', compact('products', 'count'));
    }

    public function edit($product_id) {

        $product = Product::findOrFail($product_id);
        $categories = Category::get();
        
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update($product_id, UpdateProduct $request) {

        $product = Product::findOrFail($product_id);
        
        $product->category_id = $request->input('category_id');
        $product->name        = $request->input('name');
        $product->description = $request->input('description');
        $product->price       = $request->input('price');
        $product->amount      = $request->input('amount');
        
        $product->save();

        return back()->with([
            'status' => [
                'type' => 'success',
                'content' => 'Zapisano zmiany.',
            ]
        ]);

    }



}
