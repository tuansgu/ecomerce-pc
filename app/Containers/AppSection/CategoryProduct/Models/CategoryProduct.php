<?php

namespace App\Containers\AppSection\CategoryProduct\Models;

use App\Containers\AppSection\Product\Models\Product;
use App\Ship\Parents\Models\Model as ParentModel;

final class CategoryProduct extends ParentModel
{
    protected $fillable = [
        'name',
    ];

    public function products () {
        return $this->hasMany(Product::class);
    }

}
