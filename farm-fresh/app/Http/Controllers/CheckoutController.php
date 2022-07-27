<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Instantiate controller instance.
     * Only logged in user can access this page
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        if (session()->has('cart') && count(session()->get('cart')) !== 0) {
            $bill['subtotal'] = array_sum(array_column(session()->get('cart'), 'line_price'));
            $bill['gst'] = 0.05 * $bill['subtotal'];
            $bill['pst'] = 0.07 * $bill['subtotal'];
            $bill['total'] = $bill['subtotal'] + $bill['pst'] + $bill['gst'];
            return view('checkout_steps.checkout', compact('bill'));
        }
        return back()->withError('Cart is empty');
    }
}
