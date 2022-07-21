<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Exception;
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
        try {
            Mail::to('ecom.farmfresh@gmail.com')->send(new Email($details));
        } catch (Exception $e) {
            return redirect('/contact')->withSuccess('Something went wrong ! Please try again');
        }
        return redirect('/contact')->withError('Thank you for your feedback');
    }
}
