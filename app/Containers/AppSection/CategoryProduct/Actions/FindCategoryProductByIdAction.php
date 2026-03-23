<?php

namespace App\Containers\AppSection\CategoryProduct\Actions;

use App\Containers\AppSection\CategoryProduct\Models\CategoryProduct;
use App\Containers\AppSection\CategoryProduct\Tasks\FindCategoryProductByIdTask;
use App\Containers\AppSection\CategoryProduct\UI\API\Requests\FindCategoryProductByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindCategoryProductByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindCategoryProductByIdTask $findCategoryProductByIdTask,
    ) {
    }

    public function run(FindCategoryProductByIdRequest $request): CategoryProduct
    {
        return $this->findCategoryProductByIdTask->run($request->id);
    }
}
