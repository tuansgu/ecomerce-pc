<?php

namespace App\Containers\AppSection\Type\Actions;

use App\Containers\AppSection\Type\Tasks\DeleteTypeTask;
use App\Containers\AppSection\Type\UI\API\Requests\DeleteTypeRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteTypeAction extends ParentAction
{
    public function __construct(
        private readonly DeleteTypeTask $deleteTypeTask,
    ) {
    }

    public function run(DeleteTypeRequest $request): bool
    {
        return $this->deleteTypeTask->run($request->id);
    }
}
