<?php

namespace App\Containers\AppSection\Cart\Actions;

use App\Containers\AppSection\Cart\Models\Cart;
use App\Containers\AppSection\Cart\Tasks\FindCartByIdTask;
use App\Containers\AppSection\Cart\UI\API\Requests\FindCartByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindCartByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindCartByIdTask $findCartByIdTask,
    ) {
    }

    public function run(FindCartByIdRequest $request): Cart
    {
        return $this->findCartByIdTask->run($request->id);
    }
}
