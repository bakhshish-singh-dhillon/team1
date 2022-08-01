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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $address = json_decode($order->shipping_address);
        $sub_total = 0;
        foreach ($order->order_line_items as $line_item) {
            $line_price = $line_item->unit_price * $line_item->quantity;
            $sub_total += $line_price;
        }
        $gst = $sub_total * 0.5;
        $pst = $sub_total * 0.7;
        $total = $sub_total + $gst + $pst;
        return view('admin/orders/edit', compact('order', 'total', 'gst', 'pst', 'sub_total', 'address'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        if ($order->delete()) {
            session()->flash('success', 'Order deleted successfully');
            return redirect('/admin/orders');
        }
        session()->flash('error', 'Sorry, Unable to create new product');
        return redirect('/admin/orders');
    }
}
