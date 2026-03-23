<?php

namespace App\Containers\AppSection\CategoryProduct\Actions;

use App\Containers\AppSection\CategoryProduct\Tasks\DeleteCategoryProductTask;
use App\Containers\AppSection\CategoryProduct\UI\API\Requests\DeleteCategoryProductRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteCategoryProductAction extends ParentAction
{
    public function __construct(
        private readonly DeleteCategoryProductTask $deleteCategoryProductTask,
    ) {
    }

    public function run(DeleteCategoryProductRequest $request): bool
    {
        return $this->deleteCategoryProductTask->run($request->id);
    }
}
