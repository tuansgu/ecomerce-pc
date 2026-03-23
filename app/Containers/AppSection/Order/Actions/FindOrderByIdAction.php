<?php

namespace App\Containers\AppSection\Order\Actions;

use App\Containers\AppSection\Order\Models\Order;
use App\Containers\AppSection\Order\Tasks\FindOrderByIdTask;
use App\Containers\AppSection\Order\UI\API\Requests\FindOrderByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindOrderByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindOrderByIdTask $findOrderByIdTask,
    ) {
    }

    public function run(FindOrderByIdRequest $request): Order
    {
        return $this->findOrderByIdTask->run($request->id);
    }
}
