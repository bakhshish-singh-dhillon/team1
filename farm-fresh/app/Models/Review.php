<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'product_id',
        'review',
        'rating'

    ];


    /**
     * Get the User of the review.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the User of the review.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
