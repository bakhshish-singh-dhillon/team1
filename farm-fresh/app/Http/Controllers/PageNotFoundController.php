<?php

namespace App\Http\Controllers;

class PageNotFoundController extends Controller
{
    public function notfound()
    {
        $title = 'Page Not Found';
        return view('404', compact('title'));
    }
}
