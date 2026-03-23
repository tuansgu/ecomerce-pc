<?php

namespace App\Containers\AppSection\DetailOrder\Models;
use App\Containers\AppSection\Product\Models\Product;
use App\Containers\AppSection\Order\Models\Order;
use App\Ship\Parents\Models\Model as ParentModel;

final class DetailOrder extends ParentModel
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
