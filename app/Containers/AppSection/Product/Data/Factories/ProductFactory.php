<?php

namespace App\Containers\AppSection\Product\Data\Factories;

use App\Containers\AppSection\Product\Models\Product;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Product
 *
 * @extends ParentFactory<TModel>
 */
final class ProductFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Product::class;

    public function definition(): array
    {
        return [];
    }
}
