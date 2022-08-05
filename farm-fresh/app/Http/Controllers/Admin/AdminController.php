<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderLineItem;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
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
        $salesCount = DB::table('orders')->whereNull('deleted_at')->sum('total');
        // $ordersCount = Category::count();
        // $productsCount = Product::count();
        // $usersCount = User::count();
        // $salesCount = Order::count('total');

        $chart_data = Order::select(
            DB::raw('year(created_at) as year'),
            DB::raw('monthname(created_at) as month'),
            DB::raw('sum(total) as sales'),
            DB::raw('count(id) as orders'),
        )->where(DB::raw('date(created_at)'), '>=', "2022-01-01")
            ->groupBy('year')
            ->groupBy('month')
            ->get();

        $pie_data =  array();
        $pie_data["Dairy"] = $this->count_orders(Category::whereIn('id', [1])->with('children.products.order_line_items')->get()->toArray());
        $pie_data["Vegetable"] = $this->count_orders(Category::whereIn('id', [2])->with('children.products.order_line_items')->get()->toArray());
        $pie_data["Fruits"] = $this->count_orders(Category::whereIn('id', [3])->with('children.products.order_line_items')->get()->toArray());
        return view('admin.index', compact('ordersCount', 'productsCount', 'usersCount', 'salesCount', 'chart_data', 'pie_data'));
    }

    /**
     * A function to increment count of orders
     *
     * @param [type] $array
     * @return void
     */
    private function count_orders($array)
    {
        $count = 0;
        array_walk_recursive($array, function ($item, $key) use (&$count) {
            if ($key == 'order_id') {
                $count++;
            }
        });
        return $count;
    }
}
