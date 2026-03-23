<?php

namespace App\Containers\AppSection\Product\Models;

use App\Containers\AppSection\CategoryProduct\Models\CategoryProduct;
use App\Containers\AppSection\Type\Models\Type;
use App\Ship\Parents\Models\Model as ParentModel;

final class Product extends ParentModel
{
    protected $fillable = [
        'name',
        'stock',
        'price',
        'description',
        'image_path',
        'type_id',
        'category_product_id',
    ];

    public function categoryProduct()
    {
        return $this->belongsTo(CategoryProduct::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    
}
