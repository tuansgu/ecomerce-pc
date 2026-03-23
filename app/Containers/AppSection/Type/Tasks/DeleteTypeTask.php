<?php

namespace App\Containers\AppSection\Type\Tasks;

use App\Containers\AppSection\Type\Data\Repositories\TypeRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class DeleteTypeTask extends ParentTask
{
    public function __construct(
        private readonly TypeRepository $repository,
    ) {
    }

    public function run($id): bool
    {
        return $this->repository->delete($id);
    }
}
