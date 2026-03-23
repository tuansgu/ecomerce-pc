<?php

namespace App\Containers\AppSection\Type\Actions;

use App\Containers\AppSection\Type\Tasks\ListTypesTask;
use App\Containers\AppSection\Type\UI\API\Requests\ListTypesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListTypesAction extends ParentAction
{
    public function __construct(
        private readonly ListTypesTask $listTypesTask,
    ) {
    }

    public function run(ListTypesRequest $request): mixed
    {
        return $this->listTypesTask->run();
    }
}
