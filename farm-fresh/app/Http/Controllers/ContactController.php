<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a Contact Form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products/index', compact('products', 'categories'));
    }
}
