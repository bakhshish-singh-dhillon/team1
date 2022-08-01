<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderPlacedEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $address;
    protected $gst;
    protected $pst;
    protected $total;
    protected $order;
    protected $sub_total;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
        $this->address = json_decode($order->shipping_address);
        $this->sub_total = 0;
        foreach ($order->order_line_items as $line_item) {
            $line_price = $line_item->unit_price * $line_item->quantity;
            $this->sub_total += $line_price;
        }
        $this->gst = $this->sub_total * 0.5;
        $this->pst = $this->sub_total * 0.7;
        $this->total = $this->sub_total + $this->gst + $this->pst;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Order Placed Successfully - " . $this->order->id)
            ->view('thank-you')
            ->with([
                'order' => $this->order,
                'gst' => $this->gst,
                'pst' => $this->pst,
                'total' => $this->total,
                'sub_total' => $this->sub_total,
                'address' => $this->address,
            ]);
    }
}
