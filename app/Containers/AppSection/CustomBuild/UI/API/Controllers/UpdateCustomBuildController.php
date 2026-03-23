<?php

namespace App\Containers\AppSection\CustomBuild\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CustomBuild\Actions\UpdateCustomBuildAction;
use App\Containers\AppSection\CustomBuild\UI\API\Requests\UpdateCustomBuildRequest;
use App\Containers\AppSection\CustomBuild\UI\API\Transformers\CustomBuildTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class UpdateCustomBuildController extends ApiController
{
    public function __invoke(UpdateCustomBuildRequest $request, UpdateCustomBuildAction $action): JsonResponse
    {
        $customBuild = $action->run($request);

        return Response::create($customBuild, CustomBuildTransformer::class)->ok();
    }
}
