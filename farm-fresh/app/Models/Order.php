<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the line items of order.
     */
    public function order_line_items()
    {
        return $this->hasMany(OrderLineItem::class);
    }

    /**
     * Get the transaction of order.
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
