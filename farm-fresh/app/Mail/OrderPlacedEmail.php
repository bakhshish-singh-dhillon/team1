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
    protected $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
        $this->address = json_decode($order->shipping_address);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Order Placed Successfully - " . $this->order->id)
            ->view('invoice/invoice')
            ->with([
                'order' => $this->order,
                'address' => $this->address,
            ]);
    }
}
