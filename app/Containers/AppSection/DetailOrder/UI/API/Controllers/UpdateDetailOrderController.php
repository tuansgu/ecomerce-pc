<?php

namespace App\Containers\AppSection\DetailOrder\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\DetailOrder\Actions\UpdateDetailOrderAction;
use App\Containers\AppSection\DetailOrder\UI\API\Requests\UpdateDetailOrderRequest;
use App\Containers\AppSection\DetailOrder\UI\API\Transformers\DetailOrderTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class UpdateDetailOrderController extends ApiController
{
    public function __invoke(UpdateDetailOrderRequest $request, UpdateDetailOrderAction $action): JsonResponse
    {
        $detailOrder = $action->run($request);

        return Response::create($detailOrder, DetailOrderTransformer::class)->ok();
    }
}
