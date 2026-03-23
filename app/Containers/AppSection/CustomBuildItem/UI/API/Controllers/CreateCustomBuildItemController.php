<?php

namespace App\Containers\AppSection\CustomBuildItem\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CustomBuildItem\Actions\CreateCustomBuildItemAction;
use App\Containers\AppSection\CustomBuildItem\UI\API\Requests\CreateCustomBuildItemRequest;
use App\Containers\AppSection\CustomBuildItem\UI\API\Transformers\CustomBuildItemTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CreateCustomBuildItemController extends ApiController
{
    public function __invoke(CreateCustomBuildItemRequest $request, CreateCustomBuildItemAction $action): JsonResponse
    {
        $customBuildItem = $action->run($request);

        return Response::create($customBuildItem, CustomBuildItemTransformer::class)->created();
    }
}
