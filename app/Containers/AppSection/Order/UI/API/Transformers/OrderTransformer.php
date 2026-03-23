<?php

namespace App\Containers\AppSection\Order\UI\API\Transformers;

use App\Containers\AppSection\Order\Models\Order;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class OrderTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

public function transform(Order $order): array
{
    return [
        'type' => $order->getResourceKey(),
        'id' => $order->getHashedKey(),
        'user_id' => $order->user_id,
        'total_amount' => $order->total_amount,
        'status' => $order->status,
        'created_at' => $order->created_at,
        'updated_at' => $order->updated_at,
        'readable_created_at' => $order->created_at->diffForHumans(),
        'readable_updated_at' => $order->updated_at->diffForHumans(),
    ];
}
}
