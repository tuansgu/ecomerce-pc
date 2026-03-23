<?php

namespace App\Containers\AppSection\CustomBuildItem\Data\Repositories;

use App\Containers\AppSection\CustomBuildItem\Models\CustomBuildItem;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of CustomBuildItem
 *
 * @extends ParentRepository<TModel>
 */
final class CustomBuildItemRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
