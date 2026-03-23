<?php

namespace App\Containers\AppSection\DetailOrder\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\DetailOrder\Actions\FindDetailOrderByIdAction;
use App\Containers\AppSection\DetailOrder\UI\API\Requests\FindDetailOrderByIdRequest;
use App\Containers\AppSection\DetailOrder\UI\API\Transformers\DetailOrderTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class FindDetailOrderByIdController extends ApiController
{
    public function __invoke(FindDetailOrderByIdRequest $request, FindDetailOrderByIdAction $action): JsonResponse
    {
        $detailOrder = $action->run($request);

        return Response::create($detailOrder, DetailOrderTransformer::class)->ok();
    }
}
