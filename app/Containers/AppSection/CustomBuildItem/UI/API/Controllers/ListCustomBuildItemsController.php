<?php

namespace App\Containers\AppSection\CustomBuildItem\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CustomBuildItem\Actions\ListCustomBuildItemsAction;
use App\Containers\AppSection\CustomBuildItem\UI\API\Requests\ListCustomBuildItemsRequest;
use App\Containers\AppSection\CustomBuildItem\UI\API\Transformers\CustomBuildItemTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class ListCustomBuildItemsController extends ApiController
{
    public function __invoke(ListCustomBuildItemsRequest $request, ListCustomBuildItemsAction $action): JsonResponse
    {
        $customBuildItems = $action->run($request);

        return Response::create($customBuildItems, CustomBuildItemTransformer::class)->ok();
    }
}
