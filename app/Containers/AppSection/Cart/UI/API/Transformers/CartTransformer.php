<?php

namespace App\Containers\AppSection\Cart\UI\API\Transformers;

use App\Containers\AppSection\Cart\Models\Cart;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class CartTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Cart $cart): array
    {
        return [
            'type' => $cart->getResourceKey(),
            'id' => $cart->getHashedKey(),
            'created_at' => $cart->created_at,
            'updated_at' => $cart->updated_at,
            'readable_created_at' => $cart->created_at->diffForHumans(),
            'readable_updated_at' => $cart->updated_at->diffForHumans(),
        ];
    }
}
