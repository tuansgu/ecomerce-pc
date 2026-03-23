<?php

namespace App\Containers\AppSection\DetailCart\Actions;

use App\Containers\AppSection\DetailCart\Tasks\ListDetailCartsTask;
use App\Containers\AppSection\DetailCart\UI\API\Requests\ListDetailCartsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListDetailCartsAction extends ParentAction
{
    public function __construct(
        private readonly ListDetailCartsTask $listDetailCartsTask,
    ) {
    }

    public function run(ListDetailCartsRequest $request): mixed
    {
        return $this->listDetailCartsTask->run();
    }
}
