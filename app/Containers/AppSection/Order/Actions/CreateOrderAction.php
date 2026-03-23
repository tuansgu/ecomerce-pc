<?php

namespace App\Containers\AppSection\Order\Actions;

use App\Containers\AppSection\Order\Models\Order;
use App\Containers\AppSection\Order\Tasks\CreateOrderTask;
use App\Containers\AppSection\Order\UI\API\Requests\CreateOrderRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateOrderAction extends ParentAction
{
    public function __construct(
        private readonly CreateOrderTask $createOrderTask,
    ) {
    }

    public function run(CreateOrderRequest $request): Order
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->createOrderTask->run($data);
    }
}
