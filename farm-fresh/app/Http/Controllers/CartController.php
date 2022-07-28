<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        if (session()->has('cart') && count(session()->get('cart')) !== 0) {
            $bill['subtotal'] = array_sum(array_column(session()->get('cart'), 'line_price'));
            $bill['gst'] = 0.05 * $bill['subtotal'];
            $bill['pst'] = 0.07 * $bill['subtotal'];
            $bill['total'] = $bill['subtotal'] + $bill['pst'] + $bill['gst'];
            return view('checkout_steps.cart', compact('bill'));
        }
        return back()->withError('Cart is empty');
    }


    public function add(Product $product, Request $request)
    {
        
        $valid = $request->validate([
            'quantity' => 'required|max:10',
        ]);
        $cart = session()->get('cart', []);

        $cart[$product->id] = [
            "quantity" => $request->quantity,
            "name" => $product->name,
            "price" => $product->price,
            "line_price" => $product->price * $request->quantity
        ];


        session()->put('cart', $cart);
        return back()->withSuccess('Product added to cart successfully!');
    }

    public function remove(Product $product)
    {
        if ($product->id) {
            $cart = session()->get('cart');
            if (isset($cart[$product->id])) {
                unset($cart[$product->id]);
                session()->put('cart', $cart);
            }
            if (count(session()->get('cart')) === 0){
                return redirect('/')->withError('Cart is empty');   
            }
            return back()->withSuccess('Product removed successfully');
        }
    }

    
    public function clear()
    {
        session()->forget('cart');
        return redirect('/')->withError('Cart is empty');
    }
}
