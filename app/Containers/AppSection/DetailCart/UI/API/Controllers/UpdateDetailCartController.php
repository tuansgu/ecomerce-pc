<?php

namespace App\Containers\AppSection\DetailCart\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\DetailCart\Actions\UpdateDetailCartAction;
use App\Containers\AppSection\DetailCart\UI\API\Requests\UpdateDetailCartRequest;
use App\Containers\AppSection\DetailCart\UI\API\Transformers\DetailCartTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class UpdateDetailCartController extends ApiController
{
    public function __invoke(UpdateDetailCartRequest $request, UpdateDetailCartAction $action): JsonResponse
    {
        $detailCart = $action->run($request);

        return Response::create($detailCart, DetailCartTransformer::class)->ok();
    }
}
