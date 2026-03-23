<?php

namespace App\Containers\AppSection\CategoryProduct\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CategoryProduct\Actions\DeleteCategoryProductAction;
use App\Containers\AppSection\CategoryProduct\UI\API\Requests\DeleteCategoryProductRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class DeleteCategoryProductController extends ApiController
{
    public function __invoke(DeleteCategoryProductRequest $request, DeleteCategoryProductAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
