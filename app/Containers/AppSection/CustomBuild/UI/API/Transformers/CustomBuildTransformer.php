<?php

namespace App\Containers\AppSection\CustomBuild\UI\API\Transformers;

use App\Containers\AppSection\CustomBuild\Models\CustomBuild;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class CustomBuildTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(CustomBuild $custombuild): array
    {
        return [
            'type' => $custombuild->getResourceKey(),
            'id' => $custombuild->getHashedKey(),
            'created_at' => $custombuild->created_at,
            'updated_at' => $custombuild->updated_at,
            'readable_created_at' => $custombuild->created_at->diffForHumans(),
            'readable_updated_at' => $custombuild->updated_at->diffForHumans(),
        ];
    }
}
