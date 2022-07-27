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
        // $product = Product::create([
        //     'sku' => $valid['sku'],
        //     'name' => $valid['name'],
        //     'price' => $valid['price'],
        //     'description' => $valid['description'],
        //     'measure_unit' => $valid['measure_unit'],
        //     'category_id' => $valid['category_id'],
        //     'quantity' => $valid['quantity']

        // ]);
        // if ($request->has('key')) {
        //     foreach ($valid['key'] as $index => $value) {
        //         $product->product_metas()->create([
        //             'name' => $value,
        //             'value' => $valid['value'][$index]
        //         ]);
        //     }
        // }
        // return redirect('/admin/products')->withSuccess('Product created successfully');
        return redirect()->back()->withSuccess('Addresses updated');
    }
}
