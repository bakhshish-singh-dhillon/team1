<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->search) {
            $orders = Order::where('id', 'like', '%' . $request->search . '%')
                ->orWhere('billing_address', 'like', '%' . $request->search . '%')
                ->orWhere('shipping_address', 'like', '%' . $request->search . '%')
                ->orWhere('subtotal', 'like', '%' . $request->search . '%')->paginate(9);
            $title = "Searching for " . $request->search;
        } else {
            $orders = Order::latest()->paginate(10);
            $title = "Orders";
        }
        return view('admin/orders/index', compact('orders', 'title'));
    }
}
