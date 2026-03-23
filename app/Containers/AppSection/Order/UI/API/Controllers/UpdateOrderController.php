<?php

namespace App\Containers\AppSection\Order\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Order\Actions\UpdateOrderAction;
use App\Containers\AppSection\Order\UI\API\Requests\UpdateOrderRequest;
use App\Containers\AppSection\Order\UI\API\Transformers\OrderTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class UpdateOrderController extends ApiController
{
    public function __invoke(UpdateOrderRequest $request, UpdateOrderAction $action): JsonResponse
    {
        $order = $action->run($request);

        return Response::create($order, OrderTransformer::class)->ok();
    }
}
