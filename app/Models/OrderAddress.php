<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderAddress extends Model
{
    protected $fillable = [
        'address_line1',
        'address_line2',
        'city',
        'state',
        'post_code',
        'country'
    ];

    public function order()
    {
        return $this->belongsTo(OrderDetail::class);
    }
}
