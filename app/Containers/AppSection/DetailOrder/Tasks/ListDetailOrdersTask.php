<?php

namespace App\Containers\AppSection\DetailOrder\Tasks;

use App\Containers\AppSection\DetailOrder\Data\Repositories\DetailOrderRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class ListDetailOrdersTask extends ParentTask
{
    public function __construct(
        private readonly DetailOrderRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
