<?php

namespace App\Containers\AppSection\CategoryProduct\Tasks;

use App\Containers\AppSection\CategoryProduct\Data\Repositories\CategoryProductRepository;
use App\Containers\AppSection\CategoryProduct\Models\CategoryProduct;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class CreateCategoryProductTask extends ParentTask
{
    public function __construct(
        private readonly CategoryProductRepository $repository,
    ) {
    }

    public function run(array $data): CategoryProduct
    {
        return $this->repository->create($data);
    }
}
