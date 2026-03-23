<?php

namespace App\Containers\AppSection\CustomBuild\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CustomBuild\Actions\FindCustomBuildByIdAction;
use App\Containers\AppSection\CustomBuild\UI\API\Requests\FindCustomBuildByIdRequest;
use App\Containers\AppSection\CustomBuild\UI\API\Transformers\CustomBuildTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class FindCustomBuildByIdController extends ApiController
{
    public function __invoke(FindCustomBuildByIdRequest $request, FindCustomBuildByIdAction $action): JsonResponse
    {
        $customBuild = $action->run($request);

        return Response::create($customBuild, CustomBuildTransformer::class)->ok();
    }
}
