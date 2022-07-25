<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pacewdd\Bx\_5bx;

class CheckoutController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

}
