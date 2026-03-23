<?php

namespace App\Containers\AppSection\DetailOrder\Tasks;

use App\Containers\AppSection\DetailOrder\Data\Repositories\DetailOrderRepository;
use App\Containers\AppSection\DetailOrder\Models\DetailOrder;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class UpdateDetailOrderTask extends ParentTask
{
    public function __construct(
        private readonly DetailOrderRepository $repository,
    ) {
    }

    public function run(array $data, $id): DetailOrder
    {
        return $this->repository->update($data, $id);
    }
}
