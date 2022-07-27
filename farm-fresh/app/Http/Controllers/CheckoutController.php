<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pacewdd\Bx\_5bx;

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

    public function index()
    {
        if (session()->has('cart') && count(session()->get('cart')) !== 0) {
            $bill['subtotal'] = array_sum(array_column(session()->get('cart'), 'line_price'));
            $bill['gst'] = 0.05 * $bill['subtotal'];
            $bill['pst'] = 0.07 * $bill['subtotal'];
            $bill['total'] = $bill['subtotal'] + $bill['pst'] + $bill['gst'];
            return view('checkout_steps.checkout', compact('bill'));
        }
        return back()->withError('Cart is empty');
    }

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
        
        
        $bill['subtotal'] = array_sum(array_column($cart, 'line_price'));
        $bill['gst'] = 0.05 * $bill['subtotal'];
        $bill['pst'] = 0.07 * $bill['subtotal'];
        $bill['total'] = $bill['subtotal'] + $bill['pst'] + $bill['gst'];



        $order = Auth::user()->orders()->create([
            'delivery_charges' => "",
            'gst' => $bill['gst'],
            'pst' => $bill['pst'],
            'vat' => "",
            'order_status' => "Pending",
            'total' => $bill['total'],
            'subtotal' => $bill['subtotal'],
            'billing_address' => json_encode(session()->get('billing_address')),
            'shipping_address' => json_encode(session()->get('shipping_address')),
            'auth_code' => "",
            'transaction_status' => "incomplete",
        ]);

        foreach($cart as $key=>$item){
            $order->order_line_items()->create([
                'product_id' => $key,
                'unit_price' => $item->unit_price,
                'product_name' => $item->name,
                'quantity' => $item->quantity
            ]);
        }

        try {

            $transaction = new _5bx('2021081', 'a88c8843898e4daad5646322ca06f14d');
            $transaction->amount($bill['total']);
            $transaction->card_num($valid['card_number']); 
            $transaction->exp_date($valid['card_exp']);
            $transaction->cvv($valid['card_cvv']); 
            $transaction->ref_num($order->id); 
            $transaction->card_type($valid['card_type']);

            $response = $transaction->authorize_and_capture(); 

            if ($response->transaction_response->response_code == '1') {
                // Your transaction was authorized... 
                echo "Success! Authorization Code: " .
                    $response->transaction_response->auth_code;
            } elseif (count($response->transaction_response->errors)) {
                foreach ($response->transaction_response->errors as $error) {
                    echo $error . '<br />';
                }
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
        // You need your login and API key to begin
        // login_id:  2021081  
        // api_key: a88c8843898e4daad5646322ca06f14d

        dd($response);
    }
}
