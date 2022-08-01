<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userProfileController extends Controller
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
        // $users = User::latest()->get();
        dd($user);
        $title = "Home";
        return view('profile', compact('user', 'title'));
    }
}
