<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Review;
use App\Models\Address;
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
        $addresses = Address::where('user_id', $user->id)->distinct()->get();
        $reviews = Review::where('user_id', $user->id)->get();
        // dd($reviews);
        $title = "Welcome!! " . $user->first_name . " " . $user->last_name . ".";
        return view('userProfile', compact('user', 'title', 'orders', 'addresses', 'reviews'));
    }
}
