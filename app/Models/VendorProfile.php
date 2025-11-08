<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorProfile extends Model
{
    protected $fillable = [
        'user_id',
        'shop_name',
        'shop_description',
        'logo',
        'is_verified',
    ];

    protected $casts =
    [
        'is_verified' => 'boolean',
    ];
}
