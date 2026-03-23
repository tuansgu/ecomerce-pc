<?php

namespace App\Containers\AppSection\DetailCart\Models;

use App\Containers\AppSection\Cart\Models\Cart;
use App\Containers\AppSection\Product\Models\Product;
use App\Containers\AppSection\Component\Models\Component;
use App\Ship\Parents\Models\Model as ParentModel;

final class DetailCart extends ParentModel
{
    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
        'price',
    ];

    public function cart() {
        return $this->belongsTo(Cart::class);
    }

    public function products() {
        return $this->hasMany(Product::class);
    }
}
