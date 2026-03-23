<?php

namespace App\Containers\AppSection\DetailCart\Actions;

use App\Containers\AppSection\DetailCart\Tasks\ListDetailCartsTask;
use App\Containers\AppSection\DetailCart\UI\API\Requests\ListDetailCartsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use App\Containers\AppSection\Cart\Models\Cart;

final class ListDetailCartsAction extends ParentAction
{
    public function __construct(
        private readonly ListDetailCartsTask $listDetailCartsTask,
    ) {
    }

    public function run(ListDetailCartsRequest $request): mixed
    {
        $cart = Cart::where('user_id', $request->user()->id)->first();
        return $this->listDetailCartsTask->run($cart->id);
    }
}
