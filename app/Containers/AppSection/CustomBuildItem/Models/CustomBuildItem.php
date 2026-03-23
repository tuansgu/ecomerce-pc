<?php

namespace App\Containers\AppSection\CustomBuildItem\Models;

use App\Containers\AppSection\CustomBuild\Models\CustomBuild;
use App\Containers\AppSection\Product\Models\Product;
use App\Ship\Parents\Models\Model as ParentModel;

final class CustomBuildItem extends ParentModel
{
    protected $fillable = [
        'product_id',
        'custom_build_id',
        'quantity',
        'price',
    ];

    public function customBuild() {
        return $this->belongsTo(CustomBuild::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
