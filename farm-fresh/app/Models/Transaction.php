<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cc_num',
        'payment_transaction_id',
        'status',
        'response',
    ];
    /**
     * Get the order for transaction.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
