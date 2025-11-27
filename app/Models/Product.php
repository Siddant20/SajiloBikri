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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function vendor()
    {
        return $this->belongsTo(VendorProfile::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'product_attribute_values')->withPivot('value')->withTimestamps();
    }


}
