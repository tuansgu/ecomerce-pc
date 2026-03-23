<?php

namespace App\Containers\AppSection\DetailOrder\Data\Factories;

use App\Containers\AppSection\DetailOrder\Models\DetailOrder;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of DetailOrder
 *
 * @extends ParentFactory<TModel>
 */
final class DetailOrderFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = DetailOrder::class;

    public function definition(): array
    {
        return [];
    }
}
