<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index() {
        
        $count['users'] = User::count();
        $count['products'] = Product::count();
        $count['orders'] = Order::count();

        return view('admin.index', compact('count'));
}
