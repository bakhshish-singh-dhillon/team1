<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * A function to show checkout steps
     *
     * @return void
     */
    public function index()
    {
        if (session()->has('cart') && count(session()->get('cart')) !== 0) {
            $bill['subtotal'] =  number_format((float)array_sum(array_column(session()->get('cart'), 'line_price')), 2, '.', '');
            $bill['gst'] = number_format((float)$this->global_var['gst'] * $bill['subtotal'], 2, '.', '');
            $bill['pst'] = number_format((float)$this->global_var['pst'] * $bill['subtotal'], 2, '.', '');
            $bill['vat'] = number_format((float)$this->global_var['vat'] * $bill['subtotal'], 2, '.', '');
            $bill['delivery_charges'] = number_format((float)$this->global_var['delivery_charges'], 2, '.', '');
            $bill['total'] = number_format((float)$bill['subtotal'] + $bill['pst'] + $bill['gst'] + $bill['vat'] + $bill['delivery_charges'], 2, '.', '');
            return view('checkout_steps.cart', compact('bill'));
        }
        return back()->withError('Cart is empty');
    }

    /**
     * A function to add product into the cart
     *
     * @param Product $product
     * @param Request $request
     * @return void
     */
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

    /**
     * A function to remove product from the cart
     *
     * @param Product $product
     * @return void
     */
    public function remove(Product $product)
    {
        if ($product->id) {
            $cart = session()->get('cart');
            if (isset($cart[$product->id])) {
                unset($cart[$product->id]);
                session()->put('cart', $cart);
            }
            if (count(session()->get('cart')) === 0) {
                return redirect('/')->withError('Cart is empty');
            }
            return back()->withSuccess('Product removed successfully');
        }
    }

    /**
     * A fucntion to clear the cart
     *
     * @return void
     */
    public function clear()
    {
        session()->forget('cart');
        return redirect('/')->withError('Cart is empty');
    }
}
