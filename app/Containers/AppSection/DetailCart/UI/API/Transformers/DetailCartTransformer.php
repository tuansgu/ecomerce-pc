<?php

namespace App\Containers\AppSection\DetailCart\UI\API\Transformers;

use App\Containers\AppSection\DetailCart\Models\DetailCart;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class DetailCartTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(DetailCart $detailcart): array
    {
        return [
            'type' => $detailcart->getResourceKey(),
            'id' => $detailcart->getHashedKey(),
            'cart_id' => $detailcart->cart_id,
            'product_id' => $detailcart->product_id,
            'quantity' => $detailcart->quantity,
            'price' => $detailcart->price,
            'created_at' => $detailcart->created_at,
            'updated_at' => $detailcart->updated_at,
        ];
    }
}
