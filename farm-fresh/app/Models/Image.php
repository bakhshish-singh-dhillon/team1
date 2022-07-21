<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['url'];

    /**
     * Get the product for image.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
