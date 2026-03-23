<?php

namespace App\Containers\AppSection\Product\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Product\Actions\DeleteProductAction;
use App\Containers\AppSection\Product\UI\API\Requests\DeleteProductRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class DeleteProductController extends ApiController
{
    public function __invoke(DeleteProductRequest $request, DeleteProductAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
