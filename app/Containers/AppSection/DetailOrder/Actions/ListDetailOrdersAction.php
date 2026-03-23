<?php

namespace App\Containers\AppSection\DetailOrder\Actions;

use App\Containers\AppSection\DetailOrder\Tasks\ListDetailOrdersTask;
use App\Containers\AppSection\DetailOrder\UI\API\Requests\ListDetailOrdersRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListDetailOrdersAction extends ParentAction
{
    public function __construct(
        private readonly ListDetailOrdersTask $listDetailOrdersTask,
    ) {
    }

    public function run(ListDetailOrdersRequest $request): mixed
    {
        return $this->listDetailOrdersTask->run();
    }
}
