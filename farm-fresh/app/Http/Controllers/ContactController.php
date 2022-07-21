<?php

namespace App\Http\Controllers;

use App\Mail\Email;
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
            'subject' => $request->category,
            'email' => $request->email,
            'body' => $request->message,
            'phone' => $request->phone,
            'name' => $request->name,
        ];
        Mail::to('ecom.farmfresh@gmail.com')->send(new Email($details));

        // if (Mail::failures()) {
        //     return response()->Fail('Sorry! Please try again latter');
        // } else {
        //     return response()->success('Great! Successfully send in your mail');
        // }
    }
}
