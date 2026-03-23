<?php

namespace App\Containers\AppSection\CustomBuild\Tasks;

use App\Containers\AppSection\CustomBuild\Data\Repositories\CustomBuildRepository;
use App\Containers\AppSection\CustomBuild\Models\CustomBuild;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindCustomBuildByIdTask extends ParentTask
{
    public function __construct(
        private readonly CustomBuildRepository $repository,
    ) {
    }

    public function run($id): CustomBuild
    {
        return $this->repository->findOrFail($id);
    }
}
