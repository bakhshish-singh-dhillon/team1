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
                ->orWhere('order_status', 'like', '%' . $request->search . '%')
                ->orWhere('subtotal', 'like', '%' . $request->search . '%')->paginate(9)->withQueryString();
            $title = "Searching for " . $request->search;
        } else {
            $orders = Order::latest()->paginate(10);
            $title = "Orders";
        }
        return view('admin/orders/index', compact('orders', 'title'));
    }

    /**
     * Show the form for editing the specified order.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $address = json_decode($order->shipping_address);
        $sub_total = 0;
        foreach ($order->order_line_items as $line_item) {
            $line_price = number_format((float)$line_item->unit_price * $line_item->quantity, 2, '.', '');
            $sub_total += number_format((float)$line_price, 2, '.', '');
        }
        $gst = number_format((float)$sub_total * 0.05, 2, '.', '');
        $pst = number_format((float)$sub_total * 0.07, 2, '.', '');
        $total = number_format((float)$sub_total + $gst + $pst, 2, '.', '');
        return view('admin/orders/edit', compact('order', 'total', 'gst', 'pst', 'sub_total', 'address'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        if ($request->order_status)
            $order->update([
                'order_status' => $request->order_status,
            ]);
        return redirect('/admin/orders')->withSuccess('Order status updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
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
