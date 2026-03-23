<?php

namespace App\Containers\AppSection\Type\Tasks;

use App\Containers\AppSection\Type\Data\Repositories\TypeRepository;
use App\Containers\AppSection\Type\Models\Type;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindTypeByIdTask extends ParentTask
{
    public function __construct(
        private readonly TypeRepository $repository,
    ) {
    }

    public function run($id): Type
    {
        return $this->repository->findOrFail($id);
    }
}
