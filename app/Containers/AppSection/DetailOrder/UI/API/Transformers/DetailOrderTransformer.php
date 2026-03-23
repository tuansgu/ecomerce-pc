<?php

namespace App\Containers\AppSection\DetailOrder\UI\API\Transformers;

use App\Containers\AppSection\DetailOrder\Models\DetailOrder;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class DetailOrderTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(DetailOrder $detailorder): array
    {
        return [
            'type' => $detailorder->getResourceKey(),
            'id' => $detailorder->getHashedKey(),
            'created_at' => $detailorder->created_at,
            'updated_at' => $detailorder->updated_at,
            'readable_created_at' => $detailorder->created_at->diffForHumans(),
            'readable_updated_at' => $detailorder->updated_at->diffForHumans(),
        ];
    }
}
