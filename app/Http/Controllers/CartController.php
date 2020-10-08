<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {

        $cart = \Cart::getContent();
        $total = \Cart::getTotal();
        $total_quantity = \Cart::getTotalQuantity();
        
// foreach($cart as $item)
// echo $item . '<br>';

        return view('cart', compact('cart', 'total', 'total_quantity'));
    
    }

    public function delete($id) {
        
        \Cart::remove($id);

        return back()->with([
            'status' => [
                'type' => 'success',
                'content' => 'Usunięto produkt z koszyka.',
            ]
        ]);
    }

    
}
