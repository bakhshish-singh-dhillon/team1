<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the product meta values.
     */
    public function product_metas()
    {
        return $this->hasMany(ProductMeta::class);
    }

    /**
     * Get the reviews od product.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
