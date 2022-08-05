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
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->address = json_decode($order->shipping_address);
        $sub_total = 0;
        foreach ($order->order_line_items as $line_item) {
            $line_price = $line_item->unit_price * $line_item->quantity;
            $sub_total += $line_price;
        }
        $this->gst = $sub_total * 0.5;
        $this->pst = $sub_total * 0.7;
        $this->total = $sub_total + $this->gst + $this->pst;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->detail['category'])
            ->view('feedbackEmail')
            ->with([
                'detail' => $this->detail,
            ]);
    }
}
