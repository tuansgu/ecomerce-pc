<?php

namespace App\Containers\AppSection\CustomBuildItem\UI\API\Transformers;

use App\Containers\AppSection\CustomBuildItem\Models\CustomBuildItem;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class CustomBuildItemTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(CustomBuildItem $custombuilditem): array
    {
        return [
            'type' => $custombuilditem->getResourceKey(),
            'id' => $custombuilditem->getHashedKey(),
            'created_at' => $custombuilditem->created_at,
            'updated_at' => $custombuilditem->updated_at,
            'readable_created_at' => $custombuilditem->created_at->diffForHumans(),
            'readable_updated_at' => $custombuilditem->updated_at->diffForHumans(),
        ];
    }
}
