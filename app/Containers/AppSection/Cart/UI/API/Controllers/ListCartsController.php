<?php

namespace App\Containers\AppSection\Cart\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Cart\Actions\ListCartsAction;
use App\Containers\AppSection\Cart\UI\API\Requests\ListCartsRequest;
use App\Containers\AppSection\Cart\UI\API\Transformers\CartTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class ListCartsController extends ApiController
{
    public function __invoke(ListCartsRequest $request, ListCartsAction $action): JsonResponse
    {
        $carts = $action->run($request);

        return Response::create($carts, CartTransformer::class)->ok();
    }
}
