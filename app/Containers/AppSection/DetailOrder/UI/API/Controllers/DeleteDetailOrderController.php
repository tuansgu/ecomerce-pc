<?php

namespace App\Containers\AppSection\DetailOrder\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\DetailOrder\Actions\DeleteDetailOrderAction;
use App\Containers\AppSection\DetailOrder\UI\API\Requests\DeleteDetailOrderRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class DeleteDetailOrderController extends ApiController
{
    public function __invoke(DeleteDetailOrderRequest $request, DeleteDetailOrderAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
