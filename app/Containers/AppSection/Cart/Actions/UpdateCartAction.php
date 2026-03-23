<?php

namespace App\Containers\AppSection\Cart\Actions;

use App\Containers\AppSection\Cart\Models\Cart;
use App\Containers\AppSection\Cart\Tasks\UpdateCartTask;
use App\Containers\AppSection\Cart\UI\API\Requests\UpdateCartRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateCartAction extends ParentAction
{
    public function __construct(
        private readonly UpdateCartTask $updateCartTask,
    ) {
    }

    public function run(UpdateCartRequest $request): Cart
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateCartTask->run($data, $request->id);
    }
}
