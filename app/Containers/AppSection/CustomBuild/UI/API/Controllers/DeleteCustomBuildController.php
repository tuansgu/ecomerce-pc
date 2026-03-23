<?php

namespace App\Containers\AppSection\CustomBuild\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\CustomBuild\Actions\DeleteCustomBuildAction;
use App\Containers\AppSection\CustomBuild\UI\API\Requests\DeleteCustomBuildRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class DeleteCustomBuildController extends ApiController
{
    public function __invoke(DeleteCustomBuildRequest $request, DeleteCustomBuildAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
