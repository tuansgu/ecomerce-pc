<?php

namespace App\Containers\AppSection\DetailOrder\Data\Repositories;

use App\Containers\AppSection\DetailOrder\Models\DetailOrder;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of DetailOrder
 *
 * @extends ParentRepository<TModel>
 */
final class DetailOrderRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
