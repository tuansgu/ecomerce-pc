<?php

namespace App\Containers\AppSection\CustomBuild\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CustomBuild\Actions\ListCustomBuildsAction;
use App\Containers\AppSection\CustomBuild\UI\API\Requests\ListCustomBuildsRequest;
use App\Containers\AppSection\CustomBuild\UI\API\Transformers\CustomBuildTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class ListCustomBuildsController extends ApiController
{
    public function __invoke(ListCustomBuildsRequest $request, ListCustomBuildsAction $action): JsonResponse
    {
        $customBuilds = $action->run($request);

        return Response::create($customBuilds, CustomBuildTransformer::class)->ok();
    }
}
