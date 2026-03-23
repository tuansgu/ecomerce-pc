<?php

namespace App\Containers\AppSection\Order\Data\Factories;

use App\Containers\AppSection\Order\Models\Order;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Order
 *
 * @extends ParentFactory<TModel>
 */
final class OrderFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Order::class;

    public function definition(): array
    {
        return [];
    }
}
