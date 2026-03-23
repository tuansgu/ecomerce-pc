<?php

namespace App\Containers\AppSection\CustomBuildItem\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CustomBuildItem\Actions\FindCustomBuildItemByIdAction;
use App\Containers\AppSection\CustomBuildItem\UI\API\Requests\FindCustomBuildItemByIdRequest;
use App\Containers\AppSection\CustomBuildItem\UI\API\Transformers\CustomBuildItemTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class FindCustomBuildItemByIdController extends ApiController
{
    public function __invoke(FindCustomBuildItemByIdRequest $request, FindCustomBuildItemByIdAction $action): JsonResponse
    {
        $customBuildItem = $action->run($request);

        return Response::create($customBuildItem, CustomBuildItemTransformer::class)->ok();
    }
}
