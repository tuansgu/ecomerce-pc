<?php

namespace App\Containers\AppSection\CategoryProduct\Data\Repositories;

use App\Containers\AppSection\CategoryProduct\Models\CategoryProduct;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of CategoryProduct
 *
 * @extends ParentRepository<TModel>
 */
final class CategoryProductRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
