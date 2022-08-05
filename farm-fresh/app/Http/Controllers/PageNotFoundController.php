<?php

namespace App\Http\Controllers;

class PageNotFoundController extends Controller
{
    /**
     * A function to show not found page
     *
     * @return void
     */
    public function notfound()
    {
        $title = 'Page Not Found';
        return view('404', compact('title'));
    }
}
