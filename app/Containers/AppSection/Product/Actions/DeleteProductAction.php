<?php

namespace App\Containers\AppSection\Product\Actions;

use App\Containers\AppSection\Product\Tasks\DeleteProductTask;
use App\Containers\AppSection\Product\UI\API\Requests\DeleteProductRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteProductAction extends ParentAction
{
    public function __construct(
        private readonly DeleteProductTask $deleteProductTask,
    ) {
    }

    public function run(DeleteProductRequest $request): bool
    {
        return $this->deleteProductTask->run($request->id);
    }
}
