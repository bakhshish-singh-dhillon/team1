<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * A function to show privacy policy page
     *
     * @return void
     */
    public function index()
    {
        $title = 'Privacy Policy';
        return view('privacy', compact('title'));
    }
}
