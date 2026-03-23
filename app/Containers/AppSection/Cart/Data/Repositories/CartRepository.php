<?php

namespace App\Containers\AppSection\Cart\Data\Repositories;

use App\Containers\AppSection\Cart\Models\Cart;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Cart
 *
 * @extends ParentRepository<TModel>
 */
final class CartRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
