<?php

namespace App\Containers\AppSection\Cart\Tasks;

use App\Containers\AppSection\Cart\Data\Repositories\CartRepository;
use App\Containers\AppSection\Cart\Models\Cart;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class CreateCartTask extends ParentTask
{
    public function __construct(
        private readonly CartRepository $repository,
    ) {
    }

    public function run(array $data): Cart
    {
        return $this->repository->create($data);
    }
}
