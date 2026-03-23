<?php

namespace App\Containers\AppSection\Product\Actions;

use App\Containers\AppSection\Product\Models\Product;
use App\Containers\AppSection\Product\Tasks\FindProductByIdTask;
use App\Containers\AppSection\Product\UI\API\Requests\FindProductByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindProductByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindProductByIdTask $findProductByIdTask,
    ) {
    }

    public function run(FindProductByIdRequest $request): Product
    {
        return $this->findProductByIdTask->run($request->id);
    }
}
