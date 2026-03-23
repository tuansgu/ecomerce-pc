<?php

namespace App\Containers\AppSection\Type\Models;

use App\Containers\AppSection\Product\Models\Product;
use App\Ship\Parents\Models\Model as ParentModel;

final class Type extends ParentModel
{
    protected $fillable = [
        'name',
    ];
    public function products() {
        return $this->hasMany(Product::class);
    }
}
