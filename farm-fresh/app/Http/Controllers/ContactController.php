<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    /**
     * Display Contact Form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Contact";
        return view('contact/index', compact('title'));
    }

    /**
     * Display a Contact Form.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ContactFormRequest $request)
    {
        $valid = $request->validated();
        try {
            Mail::to('ecom.farmfresh@gmail.com')->send(new Email($valid));
        } catch (Exception $e) {
            return redirect('/contact')->withError('Something went wrong ! Please try again');
        }
        return redirect('/contact')->withSuccess('Thank you for your feedback');
    }
}
