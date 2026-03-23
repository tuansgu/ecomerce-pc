<?php

namespace App\Containers\AppSection\Product\UI\API\Transformers;

use App\Containers\AppSection\CategoryProduct\Models\CategoryProduct;
use App\Containers\AppSection\CategoryProduct\UI\API\Transformers\CategoryProductTransformer;
use App\Containers\AppSection\Product\Models\Product;
use App\Containers\AppSection\Type\Models\Type;
use App\Containers\AppSection\Type\UI\API\Transformers\TypeTransformer;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class ProductTransformer extends ParentTransformer
{
    protected array $defaultIncludes = ['type', 'categoryProduct'];

    protected array $availableIncludes = [];

    public function transform(Product $product): array
    {
        return [
            'type' => $product->getResourceKey(),
            'id' => $product->getHashedKey(),
            'name' => $product->name,
            'price' => $product->price,
            'stock' => $product->stock,
            'description' => $product->description,
            'image_path' => $product->image_path,
            'category_product_id' => $product->category_product_id,
            'type_id' => $product->type_id,
            'created_at' => $product->created_at,
            'updated_at' => $product->updated_at,
            'readable_created_at' => $product->created_at->diffForHumans(),
            'readable_updated_at' => $product->updated_at->diffForHumans(),
        ];
    }

    public function includeType(Product $product) {
        return $this->item($product->type, new TypeTransformer());
    }

    public function includeCategoryProduct(Product $product) {
        return $this->item($product->categoryProduct, new CategoryProductTransformer());
    }

}
