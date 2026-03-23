<?php

namespace App\Containers\AppSection\DetailOrder\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\DetailOrder\Actions\ListDetailOrdersAction;
use App\Containers\AppSection\DetailOrder\UI\API\Requests\ListDetailOrdersRequest;
use App\Containers\AppSection\DetailOrder\UI\API\Transformers\DetailOrderTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class ListDetailOrdersController extends ApiController
{
    public function __invoke(ListDetailOrdersRequest $request, ListDetailOrdersAction $action): JsonResponse
    {
        $detailOrders = $action->run($request);

        return Response::create($detailOrders, DetailOrderTransformer::class)->ok();
    }
}
