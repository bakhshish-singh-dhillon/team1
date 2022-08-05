<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Review;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Models\OrderLineItem;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
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

    /**
     * A function to show user profile
     *
     * @param User $user
     * @return void
     */
    public function show(User $user)
    {
        $orders = Order::where('user_id', $user->id)->get();
        $addresses = Address::where('user_id', $user->id)->distinct()->get();
        $reviews = Review::where('user_id', $user->id)->get();
        // $lineItems = OrderLineItem::where('user_id', $user->id)->get();
        // dd($lineItems);
        $title = "Welcome!! " . $user->first_name . " " . $user->last_name . ".";
        return view('user-profile', compact('user', 'title', 'orders', 'addresses', 'reviews'));
    }

    /**
     * A funciton to show orders
     *
     * @param Order $order
     * @return void
     */
    public function show_order(Order $order)
    {
        $address = json_decode($order->shipping_address);
        $sub_total = 0;
        foreach ($order->order_line_items as $line_item) {
            $line_price = number_format((float)$line_item->unit_price * $line_item->quantity, 2, '.', '');
            $sub_total += number_format((float)$line_price, 2, '.', '');
        }

        $gst = number_format((float)$sub_total * 0.05, 2, '.', '');
        $pst = number_format((float)$sub_total * 0.07, 2, '.', '');
        $total = number_format((float)$sub_total + $gst + $pst, 2, '.', '');
        return view('user-order', compact('order', 'total', 'gst', 'pst', 'sub_total', 'address'));
    }

    /**
     * Update the specified User in storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'is_subscribed' => (isset($request->is_subscribed) ? true : false),
        ]);
        return redirect("/user-profile/$user->id")->withSuccess('User Details updated successfully');
    }

    /**
     * Show User Addresses to edit
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function addresses(User $user)
    {
        $addresses = Auth::user()->addresses;
        $title = "Welcome!! " . $user->first_name . " " . $user->last_name . ".";
        return view('user-profile-addresses', compact('addresses', 'user', 'title'));
    }

    /**
     * Store a checkout addresses.
     *
     * @param  \App\Http\Requests\StoreCheckoutAddressesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        // Retrieve the validated input data...
        $valid = $request->validate([
            "address_name" => "required",
            "address" => "required",
            "city" => "required",
            "province" => "required",
            "country" => "required",
            "postal_code" => "required",
            "phone" => "required",
        ]);
        // dd($valid);
        $address = [
            'address_type' => $valid["address_name"],
            'address' => $valid["address"],
            'city' => $valid["city"],
            'province' => $valid["province"],
            'country' => $valid["country"],
            'postal_code' => $valid["postal_code"],
            'phone' => $valid["phone"]
        ];

        Auth::user()->addresses()->updateOrCreate(
            ['id' => $request->get("address_id") ?? null],
            $address
        );

        session()->put('address', json_encode($address));

        return redirect('/user-profile/' . $user->id)->withSuccess('Addresses Updated Successfully');
    }
}
