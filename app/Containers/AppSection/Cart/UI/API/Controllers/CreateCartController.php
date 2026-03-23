<?php

namespace App\Containers\AppSection\Cart\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Cart\Actions\CreateCartAction;
use App\Containers\AppSection\Cart\UI\API\Requests\CreateCartRequest;
use App\Containers\AppSection\Cart\UI\API\Transformers\CartTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CreateCartController extends ApiController
{
    public function __invoke(CreateCartRequest $request, CreateCartAction $action): JsonResponse
    {
        $cart = $action->run($request);

        return Response::create($cart, CartTransformer::class)->created();
    }
}
