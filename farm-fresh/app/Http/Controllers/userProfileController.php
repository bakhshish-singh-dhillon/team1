<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

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

        $title = "Welcome!! " . $user->first_name . " " . $user->last_name . ".";
        // return view('userProfile', compact('user', 'title', 'orders'));
        return view('userProfile')->with('user', $user)->with('title', $title)->with('orders', json_decode($orders, true));
    }
}
