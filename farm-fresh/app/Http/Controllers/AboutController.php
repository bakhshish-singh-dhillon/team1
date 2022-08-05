<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * A function to view about us page
     *
     * @return void
     */
    public function index()
    {
        $title = 'About';
        return view('about', compact('title'));
    }
}
