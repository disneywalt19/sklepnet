<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Darryldecode\Cart\Cart;

class ProductsController extends Controller
{
    public function index() {
        
        $products = Product::Paginate(9);
        $categories = Category::withCount('products')->get();
       
        return view('index', compact('products', 'categories'));
    }

    public function categoryProducts($id) {

        $products = Product::Paginate(9);
        $categories = Category::withCount('products')->get();
        $categoryProducts = DB::table('products')->where('category_id', $id)->get();
        // dd($id);

        return view('categoryproducts', compact('products', 'categories', 'categoryProducts'));
    
    }

    public function show($product_id) {

        $product = Product::findOrFail($product_id);

        return view('show', compact('product'));

    }

    public function add_to_cart($product_id, Request $request) {

        $product = Product::findOrFail($product_id);
        $amount = min($request->input('amount'), $product->amount);

        \Cart::add($product->id, $product->name, $product->price, $amount);

        return back()->with([
            'status' => [
                'type' => 'success',
                'content' => 'Dodano produkt do koszyka.',
            ]
        ]);
    }
  







//    public function searchByPricee($from, $to) {
//     $products = Product::Paginate(9);
//     $categories = Category::withCount('products')->get();
//     // $from = Http::input('from');
//       $priceFrom = $products->where('price', '>=', $from);
//       $priceTo = $products->where('price', '>=', $to);

//         $priceFromTo = $products->whereBetween('price', [$priceFrom, $priceTo])->get();
//         // dd($from);
//       return view('searchByPrice', compact('priceFromTo'));
//    }
}
