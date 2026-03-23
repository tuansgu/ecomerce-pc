<?php

namespace App\Containers\AppSection\DetailCart\Actions;

use App\Containers\AppSection\DetailCart\Models\DetailCart;
use App\Containers\AppSection\DetailCart\Tasks\CreateDetailCartTask;
use App\Containers\AppSection\DetailCart\UI\API\Requests\CreateDetailCartRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateDetailCartAction extends ParentAction
{
    public function __construct(
        private readonly CreateDetailCartTask $createDetailCartTask,
    ) {}

    public function run(CreateDetailCartRequest $request): DetailCart
    {
        $data = $request->sanitize([
            'product_id',
            'quantity',
            'price',
        ]);

        $cart = \App\Containers\AppSection\Cart\Models\Cart::firstOrCreate(
            ['user_id' => $request->user()->id]
        );

        $data['cart_id'] = $cart->id;

        return $this->createDetailCartTask->run($data);
    }
}
