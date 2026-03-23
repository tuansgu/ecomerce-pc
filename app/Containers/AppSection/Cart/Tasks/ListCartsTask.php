<?php

namespace App\Containers\AppSection\Cart\Tasks;

use App\Containers\AppSection\Cart\Data\Repositories\CartRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class ListCartsTask extends ParentTask
{
    public function __construct(
        private readonly CartRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
