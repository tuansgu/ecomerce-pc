<?php

namespace App\Containers\AppSection\DetailOrder\Actions;

use App\Containers\AppSection\DetailOrder\Models\DetailOrder;
use App\Containers\AppSection\DetailOrder\Tasks\FindDetailOrderByIdTask;
use App\Containers\AppSection\DetailOrder\UI\API\Requests\FindDetailOrderByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindDetailOrderByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindDetailOrderByIdTask $findDetailOrderByIdTask,
    ) {
    }

    public function run(FindDetailOrderByIdRequest $request): DetailOrder
    {
        return $this->findDetailOrderByIdTask->run($request->id);
    }
}
