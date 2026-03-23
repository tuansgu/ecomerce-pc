<?php

namespace App\Containers\AppSection\DetailOrder\Tasks;

use App\Containers\AppSection\DetailOrder\Data\Repositories\DetailOrderRepository;
use App\Containers\AppSection\DetailOrder\Models\DetailOrder;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class CreateDetailOrderTask extends ParentTask
{
    public function __construct(
        private readonly DetailOrderRepository $repository,
    ) {
    }

    public function run(array $data): DetailOrder
    {
        return $this->repository->create($data);
    }
}
