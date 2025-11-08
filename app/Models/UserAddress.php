<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'address_line1',
        'address_line2',
        'city',
        'state',
        'post_code',
        'country'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
