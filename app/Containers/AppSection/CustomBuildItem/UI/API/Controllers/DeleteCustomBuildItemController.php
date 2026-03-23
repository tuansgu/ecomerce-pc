<?php

namespace App\Containers\AppSection\CustomBuildItem\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CustomBuildItem\Actions\DeleteCustomBuildItemAction;
use App\Containers\AppSection\CustomBuildItem\UI\API\Requests\DeleteCustomBuildItemRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class DeleteCustomBuildItemController extends ApiController
{
    public function __invoke(DeleteCustomBuildItemRequest $request, DeleteCustomBuildItemAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
