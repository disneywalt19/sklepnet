<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function search(Request $request) {
        // Search controller
        $query = $request->input('query');
        $products = \App\Models\Product::where('name', 'like', "%$query%")->get();

       return view('search')->with('products', $products);
        
    }
    

    
}
