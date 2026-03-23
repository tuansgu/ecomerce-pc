<?php

namespace App\Containers\AppSection\DetailOrder\Actions;

use App\Containers\AppSection\DetailOrder\Models\DetailOrder;
use App\Containers\AppSection\DetailOrder\Tasks\UpdateDetailOrderTask;
use App\Containers\AppSection\DetailOrder\UI\API\Requests\UpdateDetailOrderRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateDetailOrderAction extends ParentAction
{
    public function __construct(
        private readonly UpdateDetailOrderTask $updateDetailOrderTask,
    ) {
    }

    public function run(UpdateDetailOrderRequest $request): DetailOrder
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateDetailOrderTask->run($data, $request->id);
    }
}
