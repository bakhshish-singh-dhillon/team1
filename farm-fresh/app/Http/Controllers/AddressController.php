<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCheckoutAddressesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pacewdd\Bx\_5bx;

class AddressController extends Controller
{
    /**
     * Instantiate a new controller instance.
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
            $addresses = Auth::user()->addresses;
            return view('checkout_steps.addresses', compact('bill', 'addresses'));
        }
        return back()->withError('Cart is empty');
    }

    
}
