<?php

namespace App\Containers\AppSection\CategoryProduct\UI\API\Transformers;

use App\Containers\AppSection\CategoryProduct\Models\CategoryProduct;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class CategoryProductTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(CategoryProduct $categoryproduct): array
    {
        return [
            'type' => $categoryproduct->getResourceKey(),
            'id' => $categoryproduct->getHashedKey(),
            'created_at' => $categoryproduct->created_at,
            'updated_at' => $categoryproduct->updated_at,
            'readable_created_at' => $categoryproduct->created_at->diffForHumans(),
            'readable_updated_at' => $categoryproduct->updated_at->diffForHumans(),
        ];
    }
}
