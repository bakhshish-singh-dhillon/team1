<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{

    public function add(Product $product)
    {

        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                "quantity" => 1,
                "name" => $product->name,
                "price" => $product->price
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->withSuccess('Product added to cart successfully!');
    }

}
