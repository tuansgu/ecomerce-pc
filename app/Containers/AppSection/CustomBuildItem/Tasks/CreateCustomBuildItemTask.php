<?php

namespace App\Containers\AppSection\CustomBuildItem\Tasks;

use App\Containers\AppSection\CustomBuildItem\Data\Repositories\CustomBuildItemRepository;
use App\Containers\AppSection\CustomBuildItem\Models\CustomBuildItem;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class CreateCustomBuildItemTask extends ParentTask
{
    public function __construct(
        private readonly CustomBuildItemRepository $repository,
    ) {
    }

    public function run(array $data): CustomBuildItem
    {
        return $this->repository->create($data);
    }
}
