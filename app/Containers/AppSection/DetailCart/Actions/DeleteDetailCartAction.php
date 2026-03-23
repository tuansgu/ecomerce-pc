<?php

namespace App\Containers\AppSection\DetailCart\Actions;

use App\Containers\AppSection\DetailCart\Tasks\DeleteDetailCartTask;
use App\Containers\AppSection\DetailCart\UI\API\Requests\DeleteDetailCartRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteDetailCartAction extends ParentAction
{
    public function __construct(
        private readonly DeleteDetailCartTask $deleteDetailCartTask,
    ) {
    }

    public function run(DeleteDetailCartRequest $request): bool
    {
        return $this->deleteDetailCartTask->run($request->id);
    }
}
