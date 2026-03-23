<?php

namespace App\Containers\AppSection\DetailCart\Tasks;

use App\Containers\AppSection\DetailCart\Data\Repositories\DetailCartRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class ListDetailCartsTask extends ParentTask
{
    public function __construct(
        private readonly DetailCartRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
