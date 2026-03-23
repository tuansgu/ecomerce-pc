<?php

namespace App\Containers\AppSection\CategoryProduct\Actions;

use App\Containers\AppSection\CategoryProduct\Models\CategoryProduct;
use App\Containers\AppSection\CategoryProduct\Tasks\CreateCategoryProductTask;
use App\Containers\AppSection\CategoryProduct\UI\API\Requests\CreateCategoryProductRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateCategoryProductAction extends ParentAction
{
    public function __construct(
        private readonly CreateCategoryProductTask $createCategoryProductTask,
    ) {
    }

    public function run(CreateCategoryProductRequest $request): CategoryProduct
    {
        $data = $request->sanitize([
            'name'
        ]);

        return $this->createCategoryProductTask->run($data);
    }
}
