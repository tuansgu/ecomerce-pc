<?php

namespace App\Containers\AppSection\DetailCart\Data\Repositories;

use App\Containers\AppSection\DetailCart\Models\DetailCart;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of DetailCart
 *
 * @extends ParentRepository<TModel>
 */
final class DetailCartRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
