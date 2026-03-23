<?php

namespace App\Containers\AppSection\Cart\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Cart\Actions\DeleteCartAction;
use App\Containers\AppSection\Cart\UI\API\Requests\DeleteCartRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class DeleteCartController extends ApiController
{
    public function __invoke(DeleteCartRequest $request, DeleteCartAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
