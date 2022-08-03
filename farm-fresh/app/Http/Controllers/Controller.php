<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $global_var = [
        'gst' => 0,
        'pst' => 0,
        'vat' => 0,
        'delivery_charges' => 10,
    ];
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
