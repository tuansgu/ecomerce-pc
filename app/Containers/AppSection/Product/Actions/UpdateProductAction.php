<?php

namespace App\Containers\AppSection\Product\Actions;

use App\Containers\AppSection\Product\Models\Product;
use App\Containers\AppSection\Product\Tasks\UpdateProductTask;
use App\Containers\AppSection\Product\UI\API\Requests\UpdateProductRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateProductAction extends ParentAction
{
    public function __construct(
        private readonly UpdateProductTask $updateProductTask,
    ) {
    }

    public function run(UpdateProductRequest $request): Product
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateProductTask->run($data, $request->id);
    }
}
