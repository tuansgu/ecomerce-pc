<?php

namespace App\Containers\AppSection\CustomBuild\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CustomBuild\Actions\CreateCustomBuildAction;
use App\Containers\AppSection\CustomBuild\UI\API\Requests\CreateCustomBuildRequest;
use App\Containers\AppSection\CustomBuild\UI\API\Transformers\CustomBuildTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CreateCustomBuildController extends ApiController
{
    public function __invoke(CreateCustomBuildRequest $request, CreateCustomBuildAction $action): JsonResponse
    {
        $customBuild = $action->run($request);

        return Response::create($customBuild, CustomBuildTransformer::class)->created();
    }
}
