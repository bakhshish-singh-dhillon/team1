<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the User of the address.
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
