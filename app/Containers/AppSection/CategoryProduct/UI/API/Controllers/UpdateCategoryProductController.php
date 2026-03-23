<?php

namespace App\Containers\AppSection\CategoryProduct\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CategoryProduct\Actions\UpdateCategoryProductAction;
use App\Containers\AppSection\CategoryProduct\UI\API\Requests\UpdateCategoryProductRequest;
use App\Containers\AppSection\CategoryProduct\UI\API\Transformers\CategoryProductTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class UpdateCategoryProductController extends ApiController
{
    public function __invoke(UpdateCategoryProductRequest $request, UpdateCategoryProductAction $action): JsonResponse
    {
        $categoryProduct = $action->run($request);

        return Response::create($categoryProduct, CategoryProductTransformer::class)->ok();
    }
}
