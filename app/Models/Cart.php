<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'total_items',
        'total_price',
    ];

    protected $casts = [
        'total_items' => 'integer',
        'total_price' => 'decimal:2',
    ];
}
