<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $bill['subtotal'] = array_sum(array_column(session()->get('cart'), 'line_price'));
        $bill['gst'] = 0.05 * $bill['subtotal'];
        $bill['pst'] = 0.07 * $bill['subtotal'];
        $bill['total'] = $bill['subtotal'] + $bill['pst'] + $bill['gst'];
        return view('cart.index', compact('bill'));
    }


    public function add(Product $product)
    {

        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
            $cart[$product->id]['line_price'] = $cart[$product->id]['price'] * $cart[$product->id]['quantity'];
        } else {
            $cart[$product->id] = [
                "quantity" => 1,
                "name" => $product->name,
                "price" => $product->price,
                "line_price" => $product->price
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->withSuccess('Product added to cart successfully!');
    }

    public function remove(Product $product)
    {
        if($product->id) {
            $cart = session()->get('cart');
            if(isset($cart[$product->id])) {
                unset($cart[$product->id]);
                session()->put('cart', $cart);
            }
            session()->back()->withSuccess('Product removed successfully');
        }
    }
}
