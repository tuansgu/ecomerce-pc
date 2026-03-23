<?php

namespace App\Containers\AppSection\Product\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Product\Actions\UpdateProductAction;
use App\Containers\AppSection\Product\UI\API\Requests\UpdateProductRequest;
use App\Containers\AppSection\Product\UI\API\Transformers\ProductTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class UpdateProductController extends ApiController
{
    public function __invoke(UpdateProductRequest $request, UpdateProductAction $action): JsonResponse
    {
        $product = $action->run($request);

        return Response::create($product, ProductTransformer::class)->ok();
    }
}
