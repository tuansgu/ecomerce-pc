<?php

namespace App\Containers\AppSection\Order\Tasks;

use App\Containers\AppSection\Order\Data\Repositories\OrderRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class ListOrdersTask extends ParentTask
{
    public function __construct(
        private readonly OrderRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
