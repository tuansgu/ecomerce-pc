<?php

namespace App\Containers\AppSection\CategoryProduct\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CategoryProduct\Actions\CreateCategoryProductAction;
use App\Containers\AppSection\CategoryProduct\UI\API\Requests\CreateCategoryProductRequest;
use App\Containers\AppSection\CategoryProduct\UI\API\Transformers\CategoryProductTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CreateCategoryProductController extends ApiController
{
    public function __invoke(CreateCategoryProductRequest $request, CreateCategoryProductAction $action): JsonResponse
    {
        $categoryProduct = $action->run($request);

        return Response::create($categoryProduct, CategoryProductTransformer::class)->created();
    }
}
