<?php

namespace App\Containers\AppSection\DetailCart\Actions;

use App\Containers\AppSection\DetailCart\Models\DetailCart;
use App\Containers\AppSection\DetailCart\Tasks\FindDetailCartByIdTask;
use App\Containers\AppSection\DetailCart\UI\API\Requests\FindDetailCartByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindDetailCartByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindDetailCartByIdTask $findDetailCartByIdTask,
    ) {
    }

    public function run(FindDetailCartByIdRequest $request): DetailCart
    {
        return $this->findDetailCartByIdTask->run($request->id);
    }
}
