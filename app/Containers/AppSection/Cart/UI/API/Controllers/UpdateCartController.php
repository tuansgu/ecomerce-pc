<?php

namespace App\Containers\AppSection\Cart\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Cart\Actions\UpdateCartAction;
use App\Containers\AppSection\Cart\UI\API\Requests\UpdateCartRequest;
use App\Containers\AppSection\Cart\UI\API\Transformers\CartTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class UpdateCartController extends ApiController
{
    public function __invoke(UpdateCartRequest $request, UpdateCartAction $action): JsonResponse
    {
        $cart = $action->run($request);

        return Response::create($cart, CartTransformer::class)->ok();
    }
}
