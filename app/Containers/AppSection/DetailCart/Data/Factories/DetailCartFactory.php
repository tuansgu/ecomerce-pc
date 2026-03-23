<?php

namespace App\Containers\AppSection\DetailCart\Data\Factories;

use App\Containers\AppSection\DetailCart\Models\DetailCart;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of DetailCart
 *
 * @extends ParentFactory<TModel>
 */
final class DetailCartFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = DetailCart::class;

    public function definition(): array
    {
        return [];
    }
}
