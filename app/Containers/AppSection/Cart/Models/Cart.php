<?php

namespace App\Containers\AppSection\Cart\Models;

use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\DetailCart\Models\DetailCart;
use App\Ship\Parents\Models\Model as ParentModel;

final class Cart extends ParentModel
{
    protected $fillable = [
        'id',
        'total_amount',
    ];

    public function detailCart() {
        return $this->hasMany(DetailCart::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
