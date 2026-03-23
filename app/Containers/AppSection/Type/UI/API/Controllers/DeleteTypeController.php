<?php

namespace App\Containers\AppSection\Type\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Type\Actions\DeleteTypeAction;
use App\Containers\AppSection\Type\UI\API\Requests\DeleteTypeRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class DeleteTypeController extends ApiController
{
    public function __invoke(DeleteTypeRequest $request, DeleteTypeAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
