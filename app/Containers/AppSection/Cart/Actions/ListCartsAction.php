<?php

namespace App\Containers\AppSection\Cart\Actions;

use App\Containers\AppSection\Cart\Tasks\ListCartsTask;
use App\Containers\AppSection\Cart\UI\API\Requests\ListCartsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListCartsAction extends ParentAction
{
    public function __construct(
        private readonly ListCartsTask $listCartsTask,
    ) {
    }

    public function run(ListCartsRequest $request): mixed
    {
        return $this->listCartsTask->run();
    }
}
