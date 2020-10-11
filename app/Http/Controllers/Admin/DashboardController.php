<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index() {
        
        $count['users'] = User::count();
        $count['products'] = Product::count();
        $count['orders'] = Order::count();

        return view('admin.dashboard.index', compact('count'));
    }
}
