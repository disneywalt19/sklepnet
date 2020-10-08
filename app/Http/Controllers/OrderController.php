<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;



class OrderController extends Controller
{
    public function index() {
        $orders = Order::where('user_id', auth()->user()->id)->get();


        return view('account.orders.index', compact('orders'));
    }


    public function store(Request $request) {
        $cart = \Cart::getContent();
        $total_price = \Cart::getTotal();

        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->price = $total_price;
        $order->save();

        foreach($cart as $item) {
            
            $order->products()->create([
                'product_id' => $item->id,
                'amount' => $item->quantity,
        ]);
        }

        \Cart::clear();

        return back()->with([
            'status' => [
                'type' => 'success',
                'content' => 'Złożono zamówienie.',
            ]
        ]);
    }
}
