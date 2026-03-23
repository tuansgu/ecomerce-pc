<?php

namespace App\Containers\AppSection\Product\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Product\Actions\ListProductsAction;
use App\Containers\AppSection\Product\UI\API\Requests\ListProductsRequest;
use App\Containers\AppSection\Product\UI\API\Transformers\ProductTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class ListProductsController extends ApiController
{
    public function __invoke(ListProductsRequest $request, ListProductsAction $action): JsonResponse
    {
        $products = $action->run($request);

        return Response::create($products, ProductTransformer::class)->ok();
    }
}
