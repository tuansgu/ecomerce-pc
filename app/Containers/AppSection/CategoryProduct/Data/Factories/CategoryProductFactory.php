<?php

namespace App\Containers\AppSection\CategoryProduct\Data\Factories;

use App\Containers\AppSection\CategoryProduct\Models\CategoryProduct;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of CategoryProduct
 *
 * @extends ParentFactory<TModel>
 */
final class CategoryProductFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = CategoryProduct::class;

    public function definition(): array
    {
        return [];
    }
}
