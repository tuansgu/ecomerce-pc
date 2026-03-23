<?php

namespace App\Containers\AppSection\DetailCart\Tasks;

use App\Containers\AppSection\DetailCart\Data\Repositories\DetailCartRepository;
use App\Containers\AppSection\DetailCart\Models\DetailCart;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindDetailCartByIdTask extends ParentTask
{
    public function __construct(
        private readonly DetailCartRepository $repository,
    ) {
    }

    public function run($id): DetailCart
    {
        return $this->repository->findOrFail($id);
    }
}
