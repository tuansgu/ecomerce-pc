<?php

namespace App\Containers\AppSection\Type\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Type\Actions\FindTypeByIdAction;
use App\Containers\AppSection\Type\UI\API\Requests\FindTypeByIdRequest;
use App\Containers\AppSection\Type\UI\API\Transformers\TypeTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class FindTypeByIdController extends ApiController
{
    public function __invoke(FindTypeByIdRequest $request, FindTypeByIdAction $action): JsonResponse
    {
        $type = $action->run($request);

        return Response::create($type, TypeTransformer::class)->ok();
    }
}
