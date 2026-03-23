<?php

namespace App\Containers\AppSection\Type\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Type\Actions\ListTypesAction;
use App\Containers\AppSection\Type\UI\API\Requests\ListTypesRequest;
use App\Containers\AppSection\Type\UI\API\Transformers\TypeTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class ListTypesController extends ApiController
{
    public function __invoke(ListTypesRequest $request, ListTypesAction $action): JsonResponse
    {
        $types = $action->run($request);

        return Response::create($types, TypeTransformer::class)->ok();
    }
}
