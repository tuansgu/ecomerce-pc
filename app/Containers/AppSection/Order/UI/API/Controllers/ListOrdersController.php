<?php

namespace App\Containers\AppSection\Order\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Order\Actions\ListOrdersAction;
use App\Containers\AppSection\Order\UI\API\Requests\ListOrdersRequest;
use App\Containers\AppSection\Order\UI\API\Transformers\OrderTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class ListOrdersController extends ApiController
{
    public function __invoke(ListOrdersRequest $request, ListOrdersAction $action): JsonResponse
    {
        $orders = $action->run($request);

        return Response::create($orders, OrderTransformer::class)->ok();
    }
}
