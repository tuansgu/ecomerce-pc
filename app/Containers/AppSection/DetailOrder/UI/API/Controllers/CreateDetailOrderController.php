<?php

namespace App\Containers\AppSection\DetailOrder\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\DetailOrder\Actions\CreateDetailOrderAction;
use App\Containers\AppSection\DetailOrder\UI\API\Requests\CreateDetailOrderRequest;
use App\Containers\AppSection\DetailOrder\UI\API\Transformers\DetailOrderTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CreateDetailOrderController extends ApiController
{
    public function __invoke(CreateDetailOrderRequest $request, CreateDetailOrderAction $action): JsonResponse
    {
        $detailOrder = $action->run($request);

        return Response::create($detailOrder, DetailOrderTransformer::class)->created();
    }
}
