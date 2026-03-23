<?php

namespace App\Containers\AppSection\CategoryProduct\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CategoryProduct\Actions\ListCategoryProductsAction;
use App\Containers\AppSection\CategoryProduct\UI\API\Requests\ListCategoryProductsRequest;
use App\Containers\AppSection\CategoryProduct\UI\API\Transformers\CategoryProductTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class ListCategoryProductsController extends ApiController
{
    public function __invoke(ListCategoryProductsRequest $request, ListCategoryProductsAction $action): JsonResponse
    {
        $categoryProducts = $action->run($request);

        return Response::create($categoryProducts, CategoryProductTransformer::class)->ok();
    }
}
