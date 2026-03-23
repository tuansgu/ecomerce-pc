<?php

namespace App\Containers\AppSection\Cart\Actions;

use App\Containers\AppSection\Cart\Tasks\DeleteCartTask;
use App\Containers\AppSection\Cart\UI\API\Requests\DeleteCartRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteCartAction extends ParentAction
{
    public function __construct(
        private readonly DeleteCartTask $deleteCartTask,
    ) {
    }

    public function run(DeleteCartRequest $request): bool
    {
        return $this->deleteCartTask->run($request->id);
    }
}
