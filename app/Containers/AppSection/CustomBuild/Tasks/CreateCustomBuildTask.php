<?php

namespace App\Containers\AppSection\CustomBuild\Tasks;

use App\Containers\AppSection\CustomBuild\Data\Repositories\CustomBuildRepository;
use App\Containers\AppSection\CustomBuild\Models\CustomBuild;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class CreateCustomBuildTask extends ParentTask
{
    public function __construct(
        private readonly CustomBuildRepository $repository,
    ) {
    }

    public function run(array $data): CustomBuild
    {
        return $this->repository->create($data);
    }
}
