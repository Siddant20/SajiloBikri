<?php

namespace App\Models;

use App\Enum\OrderStatusEnum;
use App\Enum\PaymentMethodEnum;
use App\Enum\PaymentStatusEnum;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'order_number',
        'status',
        'total_amount',
        'payment_method',
        'payment_status',
        'notes',
        'order_placed_at',
    ];

    protected $casts = [
        'status' => OrderStatusEnum::class,
        'total_amount' => 'integer',
        'payment_method' => PaymentMethodEnum::class,
        'payment_status' => PaymentStatusEnum::class,
        'order_placed_at' => 'datetime',
    ];
}
