<?php

namespace App\Containers\AppSection\CategoryProduct\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CategoryProduct\Actions\FindCategoryProductByIdAction;
use App\Containers\AppSection\CategoryProduct\UI\API\Requests\FindCategoryProductByIdRequest;
use App\Containers\AppSection\CategoryProduct\UI\API\Transformers\CategoryProductTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class FindCategoryProductByIdController extends ApiController
{
    public function __invoke(FindCategoryProductByIdRequest $request, FindCategoryProductByIdAction $action): JsonResponse
    {
        $categoryProduct = $action->run($request);

        return Response::create($categoryProduct, CategoryProductTransformer::class)->ok();
    }
}
