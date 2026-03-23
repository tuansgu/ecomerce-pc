<?php

namespace App\Containers\AppSection\Order\Actions;

use App\Containers\AppSection\Order\Tasks\DeleteOrderTask;
use App\Containers\AppSection\Order\UI\API\Requests\DeleteOrderRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteOrderAction extends ParentAction
{
    public function __construct(
        private readonly DeleteOrderTask $deleteOrderTask,
    ) {
    }

    public function run(DeleteOrderRequest $request): bool
    {
        return $this->deleteOrderTask->run($request->id);
    }
}
