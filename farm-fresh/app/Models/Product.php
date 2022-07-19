<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sku',
        'name',
        'price',
        'measure_unit',
        'description',
        'quantity'
    ];


    /**
     * Get the product meta values.
     */
    public function product_metas()
    {
        return $this->hasMany(ProductMeta::class);
    }

    /**
     * Get the reviews of product.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Get the images of product.
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * Get the line items of product.
     */
    public function order_line_items()
    {
        return $this->hasMany(OrderLineItem::class);
    }

    /**
     * Get the categories of product.
     */

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
