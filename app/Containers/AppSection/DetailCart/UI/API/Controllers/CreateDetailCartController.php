<?php

namespace App\Containers\AppSection\DetailCart\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\DetailCart\Actions\CreateDetailCartAction;
use App\Containers\AppSection\DetailCart\UI\API\Requests\CreateDetailCartRequest;
use App\Containers\AppSection\DetailCart\UI\API\Transformers\DetailCartTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CreateDetailCartController extends ApiController
{
    public function __invoke(CreateDetailCartRequest $request, CreateDetailCartAction $action): JsonResponse
    {
        $detailCart = $action->run($request);

        return Response::create($detailCart, DetailCartTransformer::class)->created();
    }
}
