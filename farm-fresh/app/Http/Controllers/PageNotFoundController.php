<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageNotFoundController extends Controller
{
    public function notfound()
    {
        $title = 'Page Not Found';
        return view('404', compact('title'));
    }
}
