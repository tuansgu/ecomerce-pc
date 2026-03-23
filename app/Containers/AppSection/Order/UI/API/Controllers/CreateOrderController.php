<?php

namespace App\Containers\AppSection\Order\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Order\Actions\CreateOrderAction;
use App\Containers\AppSection\Order\UI\API\Requests\CreateOrderRequest;
use App\Containers\AppSection\Order\UI\API\Transformers\OrderTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CreateOrderController extends ApiController
{
    public function __invoke(CreateOrderRequest $request, CreateOrderAction $action): JsonResponse
    {
        $order = $action->run($request);

        return Response::create($order, OrderTransformer::class)->created();
    }
}
