<?php

namespace App\Containers\AppSection\Order\Data\Repositories;

use App\Containers\AppSection\Order\Models\Order;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Order
 *
 * @extends ParentRepository<TModel>
 */
final class OrderRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
