<?php

namespace App\Containers\AppSection\Type\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Type\Actions\CreateTypeAction;
use App\Containers\AppSection\Type\UI\API\Requests\CreateTypeRequest;
use App\Containers\AppSection\Type\UI\API\Transformers\TypeTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CreateTypeController extends ApiController
{
    public function __invoke(CreateTypeRequest $request, CreateTypeAction $action): JsonResponse
    {
        $type = $action->run($request);

        return Response::create($type, TypeTransformer::class)->created();
    }
}
