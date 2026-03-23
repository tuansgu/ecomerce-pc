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
            'created_at' => $detailcart->created_at,
            'updated_at' => $detailcart->updated_at,
            'readable_created_at' => $detailcart->created_at->diffForHumans(),
            'readable_updated_at' => $detailcart->updated_at->diffForHumans(),
        ];
    }
}
