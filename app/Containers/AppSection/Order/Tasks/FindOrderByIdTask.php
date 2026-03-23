<?php

namespace App\Containers\AppSection\Order\Tasks;

use App\Containers\AppSection\Order\Data\Repositories\OrderRepository;
use App\Containers\AppSection\Order\Models\Order;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindOrderByIdTask extends ParentTask
{
    public function __construct(
        private readonly OrderRepository $repository,
    ) {
    }

    public function run($id): Order
    {
        return $this->repository->findOrFail($id);
    }
}
