<?php

namespace App\Http\Controllers;

class TermsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Terms & Conditions';
        return view('terms', compact('title'));
    }
}
