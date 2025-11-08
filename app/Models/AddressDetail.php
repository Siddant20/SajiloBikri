<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddressDetail extends Model
{
    protected $fillable = [
        'addressable_type',
        'addressable_id',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'post_code',
        'country'
    ];

    
}
