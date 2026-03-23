<?php

namespace App\Containers\AppSection\CategoryProduct\Actions;

use App\Containers\AppSection\CategoryProduct\Tasks\ListCategoryProductsTask;
use App\Containers\AppSection\CategoryProduct\UI\API\Requests\ListCategoryProductsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListCategoryProductsAction extends ParentAction
{
    public function __construct(
        private readonly ListCategoryProductsTask $listCategoryProductsTask,
    ) {
    }

    public function run(ListCategoryProductsRequest $request): mixed
    {
        return $this->listCategoryProductsTask->run();
    }
}
