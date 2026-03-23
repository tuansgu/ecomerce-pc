<?php

namespace App\Containers\AppSection\Product\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Product\Actions\CreateProductAction;
use App\Containers\AppSection\Product\UI\API\Requests\CreateProductRequest;
use App\Containers\AppSection\Product\UI\API\Transformers\ProductTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CreateProductController extends ApiController
{
    public function __invoke(CreateProductRequest $request, CreateProductAction $action): JsonResponse
    {
        $product = $action->run($request);

        return Response::create($product, ProductTransformer::class)->created();
    }
}
