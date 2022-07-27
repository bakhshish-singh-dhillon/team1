<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderLineItem;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ordersCount = DB::table('orders')->count();
        $productsCount = DB::table('products')->count();
        $usersCount = DB::table('users')->count();
        $salesCount = DB::table('orders')->count('total');
        // $dairyCount = OrderLineItem::with(['products, products.categories' => function ($query) {
        //     $query->groupBy('products.categories');
        // }])->get();
        // dd($dairyCount);
        // $fruitsCount = DB::table('orders')->count('total');
        // $vegetablesCount = DB::table('orders')->count('total');
        return view('admin.index', compact('ordersCount', 'productsCount', 'usersCount', 'salesCount'));
    }
}
