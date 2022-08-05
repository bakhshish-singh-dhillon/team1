<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index()
    {
        $title = 'Privacy Policy';
        return view('privacy', compact('title'));
    }
}
