<?php

namespace App\Containers\AppSection\CategoryProduct\Actions;

use App\Containers\AppSection\CategoryProduct\Models\CategoryProduct;
use App\Containers\AppSection\CategoryProduct\Tasks\UpdateCategoryProductTask;
use App\Containers\AppSection\CategoryProduct\UI\API\Requests\UpdateCategoryProductRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateCategoryProductAction extends ParentAction
{
    public function __construct(
        private readonly UpdateCategoryProductTask $updateCategoryProductTask,
    ) {
    }

    public function run(UpdateCategoryProductRequest $request): CategoryProduct
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateCategoryProductTask->run($data, $request->id);
    }
}
