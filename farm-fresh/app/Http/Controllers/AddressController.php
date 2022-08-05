<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCheckoutAddressesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pacewdd\Bx\_5bx;

class AddressController extends Controller
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

    /**
     * A function to show checkout steps
     *
     * @return void
     */
    public function index()
    {
        if (session()->has('cart') && count(session()->get('cart')) !== 0) {
            $bill['subtotal'] = array_sum(array_column(session()->get('cart'), 'line_price'));
            $bill['gst'] = $this->global_var['gst'] * $bill['subtotal'];
            $bill['pst'] = $this->global_var['pst'] * $bill['subtotal'];
            $bill['vat'] = $this->global_var['vat'] * $bill['subtotal'];
            $bill['delivery_charges'] = $this->global_var['delivery_charges'];
            $bill['total'] = $bill['subtotal'] + $bill['pst'] + $bill['gst'] + $bill['vat'] + $bill['delivery_charges'];
            $addresses = Auth::user()->addresses;
            return view('checkout_steps.addresses', compact('bill', 'addresses'));
        }
        return back()->withError('Cart is empty');
    }

    /**
     * Store a checkout addresses.
     *
     * @param  \App\Http\Requests\StoreCheckoutAddressesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCheckoutAddressesRequest $request)
    {
        // Retrieve the validated input data...
        $valid = $request->validated();
        // dd($valid);
        $billing_address = [
            'address_type' => $valid["billing_address_name"],
            'address' => $valid["billing_address"],
            'city' => $valid["billing_city"],
            'province' => $valid["billing_province"],
            'country' => $valid["billing_country"],
            'postal_code' => $valid["billing_postal_code"],
            'phone' => $valid["billing_phone"]
        ];

        $shipping_address = [
            'address_type' => $valid["shipping_address_name"],
            'address' => $valid["shipping_address"],
            'city' => $valid["shipping_city"],
            'province' => $valid["shipping_province"],
            'country' => $valid["shipping_country"],
            'postal_code' => $valid["shipping_postal_code"],
            'phone' => $valid["shipping_phone"]
        ];

        Auth::user()->addresses()->updateOrCreate(
            ['id' => $request->get("billing_address_id") ?? null],
            $billing_address
        );
        Auth::user()->addresses()->updateOrCreate(
            ['id' => $request->get("shipping_address_id") ?? null],
            $shipping_address
        );

        session()->put('shipping_address', json_encode($shipping_address));
        session()->put('billing_address', json_encode($billing_address));

        return redirect('/checkout')->withSuccess('Addresses added');
    }
}
