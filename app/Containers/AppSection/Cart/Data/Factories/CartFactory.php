<?php

namespace App\Containers\AppSection\Cart\Data\Factories;

use App\Containers\AppSection\Cart\Models\Cart;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Cart
 *
 * @extends ParentFactory<TModel>
 */
final class CartFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Cart::class;

    public function definition(): array
    {
        return [];
    }
}
