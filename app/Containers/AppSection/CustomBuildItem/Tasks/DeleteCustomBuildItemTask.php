<?php

namespace App\Containers\AppSection\CustomBuildItem\Tasks;

use App\Containers\AppSection\CustomBuildItem\Data\Repositories\CustomBuildItemRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class DeleteCustomBuildItemTask extends ParentTask
{
    public function __construct(
        private readonly CustomBuildItemRepository $repository,
    ) {
    }

    public function run($id): bool
    {
        return $this->repository->delete($id);
    }
}
