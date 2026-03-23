<?php

namespace App\Containers\AppSection\Order\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Order\Actions\DeleteOrderAction;
use App\Containers\AppSection\Order\UI\API\Requests\DeleteOrderRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class DeleteOrderController extends ApiController
{
    public function __invoke(DeleteOrderRequest $request, DeleteOrderAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
