<?php

namespace App\Containers\AppSection\DetailOrder\Actions;

use App\Containers\AppSection\DetailOrder\Models\DetailOrder;
use App\Containers\AppSection\DetailOrder\Tasks\CreateDetailOrderTask;
use App\Containers\AppSection\DetailOrder\UI\API\Requests\CreateDetailOrderRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateDetailOrderAction extends ParentAction
{
    public function __construct(
        private readonly CreateDetailOrderTask $createDetailOrderTask,
    ) {
    }

    public function run(CreateDetailOrderRequest $request): DetailOrder
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->createDetailOrderTask->run($data);
    }
}
