<?php

namespace App\Containers\AppSection\Cart\Actions;

use App\Containers\AppSection\Cart\Models\Cart;
use App\Containers\AppSection\Cart\Tasks\CreateCartTask;
use App\Containers\AppSection\Cart\UI\API\Requests\CreateCartRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateCartAction extends ParentAction
{
    public function __construct(
        private readonly CreateCartTask $createCartTask,
    ) {
    }

    public function run(CreateCartRequest $request): Cart
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->createCartTask->run($data);
    }
}
