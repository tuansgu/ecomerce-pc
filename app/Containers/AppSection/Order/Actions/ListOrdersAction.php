<?php

namespace App\Containers\AppSection\Order\Actions;

use App\Containers\AppSection\Order\Tasks\ListOrdersTask;
use App\Containers\AppSection\Order\UI\API\Requests\ListOrdersRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListOrdersAction extends ParentAction
{
    public function __construct(
        private readonly ListOrdersTask $listOrdersTask,
    ) {
    }

    public function run(ListOrdersRequest $request): mixed
    {
        return $this->listOrdersTask->run();
    }
}
