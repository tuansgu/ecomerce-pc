<?php

namespace App\Containers\AppSection\DetailOrder\Actions;

use App\Containers\AppSection\DetailOrder\Tasks\DeleteDetailOrderTask;
use App\Containers\AppSection\DetailOrder\UI\API\Requests\DeleteDetailOrderRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteDetailOrderAction extends ParentAction
{
    public function __construct(
        private readonly DeleteDetailOrderTask $deleteDetailOrderTask,
    ) {
    }

    public function run(DeleteDetailOrderRequest $request): bool
    {
        return $this->deleteDetailOrderTask->run($request->id);
    }
}
