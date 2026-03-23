<?php

namespace App\Containers\AppSection\Order\Actions;

use App\Containers\AppSection\Cart\Models\Cart;
use App\Containers\AppSection\Order\Models\Order;
use App\Containers\AppSection\Order\Tasks\CreateOrderTask;
use App\Containers\AppSection\Order\UI\API\Requests\CreateOrderRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use App\Containers\AppSection\DetailOrder\Models\DetailOrder;

final class CreateOrderAction extends ParentAction
{
    public function __construct(
        private readonly CreateOrderTask $createOrderTask,
    ) {}

    public function run(CreateOrderRequest $request): Order
    {

        $cart = Cart::where('user_id', $request->user()->id)->with('detailCarts')->first();

        $totalAmount = $cart->detailCarts->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        $order = $this->createOrderTask->run([
            'user_id' => $request->user()->id,
            'total_amount' => $totalAmount,
            'status' => 0,
        ]);

        foreach ($cart->detailCarts as $item) {
            DetailOrder::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->price,
            ]);
        }

        $cart->detailCarts()->delete();
        $cart->delete();

        return $order;
    }
}
