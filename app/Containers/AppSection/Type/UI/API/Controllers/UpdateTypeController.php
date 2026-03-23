<?php

namespace App\Containers\AppSection\Type\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Type\Actions\UpdateTypeAction;
use App\Containers\AppSection\Type\UI\API\Requests\UpdateTypeRequest;
use App\Containers\AppSection\Type\UI\API\Transformers\TypeTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class UpdateTypeController extends ApiController
{
    public function __invoke(UpdateTypeRequest $request, UpdateTypeAction $action): JsonResponse
    {
        $type = $action->run($request);

        return Response::create($type, TypeTransformer::class)->ok();
    }
}
