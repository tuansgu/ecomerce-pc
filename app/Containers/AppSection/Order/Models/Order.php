<?php

namespace App\Containers\AppSection\Order\Models;

use App\Containers\AppSection\DetailOrder\Models\DetailOrder;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Models\Model as ParentModel;

final class Order extends ParentModel
{
    protected $fillable = [
        'id',
        'total_amount',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function detailOrders() {
        return $this->hasMany(DetailOrder::class);
    }
}
