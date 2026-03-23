<?php

namespace App\Containers\AppSection\Product\Actions;

use App\Containers\AppSection\Product\Models\Product;
use App\Containers\AppSection\Product\Tasks\CreateProductTask;
use App\Containers\AppSection\Product\UI\API\Requests\CreateProductRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateProductAction extends ParentAction
{
    public function __construct(
        private readonly CreateProductTask $createProductTask,
    ) {}

    public function run(CreateProductRequest $request): Product
    {
        $data = $request->sanitize([
            'name',
            'price',
            'stock',
            'description',
            'image_path',
            'category_product_id',
            'type_id',
        ]);

        return $this->createProductTask->run($data);
    }
}
