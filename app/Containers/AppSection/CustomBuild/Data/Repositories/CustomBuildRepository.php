<?php

namespace App\Containers\AppSection\CustomBuild\Data\Repositories;

use App\Containers\AppSection\CustomBuild\Models\CustomBuild;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of CustomBuild
 *
 * @extends ParentRepository<TModel>
 */
final class CustomBuildRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
