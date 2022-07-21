<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display Contact Form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Contact Us";
        return view('contact/index', compact('title'));
    }

    /**
     * Display a Contact Form.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'email' => $request->email,
            'body' => 'This is for testing email using smtp'
        ];
    }
}
