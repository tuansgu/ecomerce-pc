<?php

namespace App\Containers\AppSection\Product\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Product\Actions\FindProductByIdAction;
use App\Containers\AppSection\Product\UI\API\Requests\FindProductByIdRequest;
use App\Containers\AppSection\Product\UI\API\Transformers\ProductTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class FindProductByIdController extends ApiController
{
    public function __invoke(FindProductByIdRequest $request, FindProductByIdAction $action): JsonResponse
    {
        $product = $action->run($request);

        return Response::create($product, ProductTransformer::class)->ok();
    }
}
