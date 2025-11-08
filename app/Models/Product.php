<?php

namespace App\Models;

use App\Enum\ProductStatusEnum;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'name',
        'category_id',
        'vendor_profile_id',
        'location',
        'status',
        'quantity',
        'price'
    ];

    protected $casts =
    [
        'status' => ProductStatusEnum::class,
        'quantity'=> 'integer',
        'price'=>'decimal:2',
    ];
}
