<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductMeta extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the products from meta.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
