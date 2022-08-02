<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderLineItem;
use App\Models\Category;
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
        $ordersCount = DB::table('orders')->whereNull('deleted_at')->count();
        $productsCount = DB::table('products')->whereNull('deleted_at')->count();
        $usersCount = DB::table('users')->whereNull('deleted_at')->count();
        $salesCount = DB::table('orders')->whereNull('deleted_at')->count('total');
        // $dairyCount = OrderLineItem::with(['products, products.categories' => function ($query) {
        //     $query->groupBy('products.categories');
        // }])->get();
        // dd($dairyCount);
        // $fruitsCount = DB::table('orders')->count('total');
        // $vegetablesCount = DB::table('orders')->count('total');
        $chart_data = Order::select(
            DB::raw('year(created_at) as year'),
            DB::raw('monthname(created_at) as month'),
            DB::raw('sum(total) as sales'),
            DB::raw('count(id) as orders'),
        )->where(DB::raw('date(created_at)'), '>=', "2022-01-01")
            ->groupBy('year')
            ->groupBy('month')
            ->get();

    }
}
