<?php

namespace App\Containers\AppSection\DetailCart\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\DetailCart\Actions\FindDetailCartByIdAction;
use App\Containers\AppSection\DetailCart\UI\API\Requests\FindDetailCartByIdRequest;
use App\Containers\AppSection\DetailCart\UI\API\Transformers\DetailCartTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class FindDetailCartByIdController extends ApiController
{
    public function __invoke(FindDetailCartByIdRequest $request, FindDetailCartByIdAction $action): JsonResponse
    {
        $detailCart = $action->run($request);

        return Response::create($detailCart, DetailCartTransformer::class)->ok();
    }
}
