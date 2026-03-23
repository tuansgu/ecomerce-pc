<?php

namespace App\Containers\AppSection\Cart\Tasks;

use App\Containers\AppSection\Cart\Data\Repositories\CartRepository;
use App\Containers\AppSection\Cart\Models\Cart;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindCartByIdTask extends ParentTask
{
    public function __construct(
        private readonly CartRepository $repository,
    ) {
    }

    public function run($id): Cart
    {
        return $this->repository->findOrFail($id);
    }
}
