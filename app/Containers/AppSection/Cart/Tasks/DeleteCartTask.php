<?php

namespace App\Containers\AppSection\Cart\Tasks;

use App\Containers\AppSection\Cart\Data\Repositories\CartRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class DeleteCartTask extends ParentTask
{
    public function __construct(
        private readonly CartRepository $repository,
    ) {
    }

    public function run($id): bool
    {
        return $this->repository->delete($id);
    }
}
