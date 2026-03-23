<?php

namespace App\Containers\AppSection\Order\Tasks;

use App\Containers\AppSection\Order\Data\Repositories\OrderRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class DeleteOrderTask extends ParentTask
{
    public function __construct(
        private readonly OrderRepository $repository,
    ) {
    }

    public function run($id): bool
    {
        return $this->repository->delete($id);
    }
}
