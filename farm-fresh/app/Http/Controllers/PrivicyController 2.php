<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivicyController extends Controller
{
    public function index()
    {
        $title = 'Privacy Policy';
        return view('privicy', compact('title'));
    }
}
