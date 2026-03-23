<?php

namespace App\Containers\AppSection\CustomBuild\Tasks;

use App\Containers\AppSection\CustomBuild\Data\Repositories\CustomBuildRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class DeleteCustomBuildTask extends ParentTask
{
    public function __construct(
        private readonly CustomBuildRepository $repository,
    ) {
    }

    public function run($id): bool
    {
        return $this->repository->delete($id);
    }
}
