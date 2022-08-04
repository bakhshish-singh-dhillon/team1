<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Review;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Models\OrderLineItem;

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

    public function show_order(Order $order)
    {
        $address = json_decode($order->shipping_address);
        $sub_total = 0;
        foreach ($order->order_line_items as $line_item) {
            $line_price = $line_item->unit_price * $line_item->quantity;
            $sub_total += $line_price;
        }
        $gst = $sub_total * 0.05;
        $pst = $sub_total * 0.07;
        $total = $sub_total + $gst + $pst;
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
}
