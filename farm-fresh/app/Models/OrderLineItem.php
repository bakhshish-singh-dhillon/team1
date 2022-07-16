<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderLineItem extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the order for line item.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Get the product for line item.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
