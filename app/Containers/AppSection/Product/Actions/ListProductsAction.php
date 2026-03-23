<?php

namespace App\Containers\AppSection\Product\Actions;

use App\Containers\AppSection\Product\Tasks\ListProductsTask;
use App\Containers\AppSection\Product\UI\API\Requests\ListProductsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListProductsAction extends ParentAction
{
    public function __construct(
        private readonly ListProductsTask $listProductsTask,
    ) {
    }

    public function run(ListProductsRequest $request): mixed
    {
        return $this->listProductsTask->run();
    }
}
