<?php

namespace App\Http\Controllers;

use Exception;
use Pacewdd\Bx\_5bx;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Mail\OrderPlacedEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class CheckoutController extends Controller
{
    /**
     * Instantiate controller instance.
     * Only logged in user can access this page
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * A function to show checkout pages
     *
     * @return void
     */
    public function index()
    {
        if (session()->has('cart') && count(session()->get('cart')) !== 0) {
            $bill['subtotal'] = number_format((float)array_sum(array_column(session()->get('cart'), 'line_price')), 2, '.', '');
            $bill['gst'] = number_format((float)$this->global_var['gst'] * $bill['subtotal'], 2, '.', '');
            $bill['pst'] = number_format((float)$this->global_var['pst'] * $bill['subtotal'], 2, '.', '');
            $bill['vat'] = number_format((float)$this->global_var['vat'] * $bill['subtotal'], 2, '.', '');
            $bill['delivery_charges'] = number_format((float)$this->global_var['delivery_charges'], 2, '.', '');
            $bill['total'] = number_format((float)$bill['subtotal'] + $bill['pst'] + $bill['gst'] + $bill['vat'] + $bill['delivery_charges'], 2, '.', '');
            return view('checkout_steps.checkout', compact('bill'));
        }
        return back()->withError('Cart is empty');
    }

    /**
     * A function to show thank you page
     *
     * @param Order $order
     * @param Request $request
     * @return void
     */
    public function thank_you(Order $order, Request $request)
    {
        if (!$request->hasValidSignature()) {
            abort(404);
        }
        $address = json_decode($order->shipping_address);
        $sub_total = 0;
        foreach ($order->order_line_items as $line_item) {
            $line_price = number_format((float)$line_item->unit_price * $line_item->quantity, 2, '.', '');
            $sub_total += number_format((float)$line_price, 2, '.', '');
        }
        $gst = number_format((float)$sub_total * $this->global_var['gst'], 2, '.', '');
        $pst = number_format((float)$sub_total * $this->global_var['pst'], 2, '.', '');
        $vat = number_format((float)$sub_total * $this->global_var['vat'], 2, '.', '');
        $delivery_charges = number_format((float)$sub_total + $this->global_var['delivery_charges'], 2, '.', '');
        $total = number_format((float)$sub_total + $gst + $pst + $vat + $delivery_charges, 2, '.', '');
        return view('thank-you', compact('order', 'total', 'gst', 'pst', 'sub_total', 'address', 'delivery_charges', 'vat'));
    }

    /**
     * A function to process payment
     *
     * @param Request $request
     * @return void
     */
    public function process_payment(Request $request)
    {
        $valid = $request->validate([
            'card_type' => 'required',
            'name_on_card' => 'required',
            'card_number' => 'required',
            'card_exp' => 'required',
            'card_cvv' => 'required'
        ]);

        if (!session()->has('cart') or count(session()->get('cart')) == 0) {
            return back()->withError('Cart is empty');
        }

        $cart = session()->get('cart');

        $bill['subtotal'] = number_format((float)array_sum(array_column($cart, 'line_price')), 2, '.', '');
        $bill['gst'] = number_format((float)$this->global_var['gst'] * $bill['subtotal'], 2, '.', '');
        $bill['pst'] = number_format((float)$this->global_var['pst'] * $bill['subtotal'], 2, '.', '');
        $bill['vat'] = number_format((float)$this->global_var['vat'] * $bill['subtotal'], 2, '.', '');
        $bill['delivery_charges'] = number_format((float)$this->global_var['delivery_charges'], 2, '.', '');
        $bill['total'] = number_format((float)$bill['subtotal'] + $bill['pst'] + $bill['gst'] + $bill['vat'] + $bill['delivery_charges'], 2, '.', '');

        $order = Auth::user()->orders()->create([
            'delivery_charges' => $bill['delivery_charges'],
            'gst' => $bill['gst'],
            'pst' => $bill['pst'],
            'vat' => $bill['vat'],
            'order_status' => "Pending",
            'total' => $bill['total'],
            'subtotal' => $bill['subtotal'],
            'billing_address' => session()->get('billing_address'),
            'shipping_address' => session()->get('shipping_address'),
            'auth_code' => "NA",
            'transaction_status' => "incomplete",
        ]);

        foreach ($cart as $key => $item) {
            $order->order_line_items()->create([
                'product_id' => $key,
                'unit_price' => $item["price"],
                'product_name' => $item["name"],
                'quantity' => $item["quantity"]
            ]);
        }

        try {
            // You need your login and API key to begin
            // login_id:  2021081  
            // api_key: a88c8843898e4daad5646322ca06f14d
            $transaction = new _5bx('2021081', 'a88c8843898e4daad5646322ca06f14d');
            $transaction->amount($bill['total']);
            $transaction->card_num($valid['card_number']);
            $transaction->exp_date($valid['card_exp']);
            $transaction->cvv($valid['card_cvv']);
            $transaction->ref_num($order->id);
            $transaction->card_type($valid['card_type']);

            $response = $transaction->authorize_and_capture();

            if ($response->transaction_response->response_code == '1') {
                $order->auth_code = $response->transaction_response->auth_code;
                $order->transaction_status = "Successful";

                $order->transactions()->create([
                    "cc_num" => substr($valid['card_number'], -4),
                    "payment_transaction_id" => $response->transaction_response->trans_id,
                    "status" => $response->result_code,
                    "response" => json_encode($response)
                ]);
                $order->save();
                Mail::to($order->user->email)->send(new OrderPlacedEmail($order));
                session()->forget('cart');
                session()->forget('shipping_address');
                session()->forget('billing_address');

                foreach ($order->order_line_items as $line_item) {
                    $line_item->product->quantity = $line_item->product->quantity - $cart[$line_item->product->id]['quantity'];
                    $line_item->product->save();
                }
                return redirect(URL::temporarySignedRoute(
                    'thank-you',
                    now()->addMinutes(1),
                    ['order' => $order->id]
                ))->withSuccess('Order Placed Successfully');
                //return redirect('/thank-you/' . $order->id)->withSuccess('Order Placed Successfully');
            } elseif ($response->transaction_response->errors) {
                $order->transaction_status = "Failed";
                $order->save();
                $order->transactions()->create([
                    "cc_num" => substr($valid['card_number'], -4),
                    "payment_transaction_id" => $response->transaction_response->trans_id,
                    "status" => $response->result_code,
                    "response" => json_encode($response)
                ]);
                return back()->withError('Payment Unsuccessful!');
            }
        } catch (Exception $e) {

            $order->transaction_status = "Failed";
            $order->save();
            $order->transactions()->create([
                "cc_num" => substr($valid['card_number'], -4),
                "payment_transaction_id" => $response->transaction_response->trans_id,
                "status" => $response->result_code,
                "response" => json_encode($response)
            ]);
            return back()->withError('Payment Unsuccessful!');
        }

        return back()->withError('Payment Unsuccessful!');
    }
}
