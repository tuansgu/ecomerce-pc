<?php

namespace App\Containers\AppSection\CategoryProduct\Tasks;

use App\Containers\AppSection\CategoryProduct\Data\Repositories\CategoryProductRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class DeleteCategoryProductTask extends ParentTask
{
    public function __construct(
        private readonly CategoryProductRepository $repository,
    ) {
    }

    public function run($id): bool
    {
        return $this->repository->delete($id);
    }
}
