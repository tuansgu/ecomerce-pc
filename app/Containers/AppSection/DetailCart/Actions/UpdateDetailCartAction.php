<?php

namespace App\Containers\AppSection\DetailCart\Actions;

use App\Containers\AppSection\DetailCart\Models\DetailCart;
use App\Containers\AppSection\DetailCart\Tasks\UpdateDetailCartTask;
use App\Containers\AppSection\DetailCart\UI\API\Requests\UpdateDetailCartRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateDetailCartAction extends ParentAction
{
    public function __construct(
        private readonly UpdateDetailCartTask $updateDetailCartTask,
    ) {
    }

    public function run(UpdateDetailCartRequest $request): DetailCart
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateDetailCartTask->run($data, $request->id);
    }
}
