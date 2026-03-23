<?php

namespace App\Containers\AppSection\DetailCart\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\DetailCart\Actions\ListDetailCartsAction;
use App\Containers\AppSection\DetailCart\UI\API\Requests\ListDetailCartsRequest;
use App\Containers\AppSection\DetailCart\UI\API\Transformers\DetailCartTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class ListDetailCartsController extends ApiController
{
    public function __invoke(ListDetailCartsRequest $request, ListDetailCartsAction $action): JsonResponse
    {
        $detailCarts = $action->run($request);

        return Response::create($detailCarts, DetailCartTransformer::class)->ok();
    }
}
