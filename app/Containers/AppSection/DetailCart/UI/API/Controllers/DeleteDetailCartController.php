<?php

namespace App\Containers\AppSection\DetailCart\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\DetailCart\Actions\DeleteDetailCartAction;
use App\Containers\AppSection\DetailCart\UI\API\Requests\DeleteDetailCartRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class DeleteDetailCartController extends ApiController
{
    public function __invoke(DeleteDetailCartRequest $request, DeleteDetailCartAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
