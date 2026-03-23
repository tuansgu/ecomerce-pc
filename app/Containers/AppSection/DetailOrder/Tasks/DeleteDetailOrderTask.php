<?php

namespace App\Containers\AppSection\DetailOrder\Tasks;

use App\Containers\AppSection\DetailOrder\Data\Repositories\DetailOrderRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class DeleteDetailOrderTask extends ParentTask
{
    public function __construct(
        private readonly DetailOrderRepository $repository,
    ) {
    }

    public function run($id): bool
    {
        return $this->repository->delete($id);
    }
}
