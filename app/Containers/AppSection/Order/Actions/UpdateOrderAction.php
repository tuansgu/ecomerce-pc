<?php

namespace App\Containers\AppSection\Order\Actions;

use App\Containers\AppSection\Order\Models\Order;
use App\Containers\AppSection\Order\Tasks\UpdateOrderTask;
use App\Containers\AppSection\Order\UI\API\Requests\UpdateOrderRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateOrderAction extends ParentAction
{
    public function __construct(
        private readonly UpdateOrderTask $updateOrderTask,
    ) {
    }

    public function run(UpdateOrderRequest $request): Order
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateOrderTask->run($data, $request->id);
    }
}
