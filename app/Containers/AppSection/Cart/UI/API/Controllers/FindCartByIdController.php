<?php

namespace App\Containers\AppSection\Cart\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Cart\Actions\FindCartByIdAction;
use App\Containers\AppSection\Cart\UI\API\Requests\FindCartByIdRequest;
use App\Containers\AppSection\Cart\UI\API\Transformers\CartTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class FindCartByIdController extends ApiController
{
    public function __invoke(FindCartByIdRequest $request, FindCartByIdAction $action): JsonResponse
    {
        $cart = $action->run($request);

        return Response::create($cart, CartTransformer::class)->ok();
    }
}
