<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'address_type',
        'address',
        'city',
        'province',
        'country',
        'postal_code',
        'phone'
    ];

    /**
     * Get the User of the address.
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
