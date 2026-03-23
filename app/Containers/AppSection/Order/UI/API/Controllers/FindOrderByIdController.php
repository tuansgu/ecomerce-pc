<?php

namespace App\Containers\AppSection\Order\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Order\Actions\FindOrderByIdAction;
use App\Containers\AppSection\Order\UI\API\Requests\FindOrderByIdRequest;
use App\Containers\AppSection\Order\UI\API\Transformers\OrderTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class FindOrderByIdController extends ApiController
{
    public function __invoke(FindOrderByIdRequest $request, FindOrderByIdAction $action): JsonResponse
    {
        $order = $action->run($request);

        return Response::create($order, OrderTransformer::class)->ok();
    }
}
