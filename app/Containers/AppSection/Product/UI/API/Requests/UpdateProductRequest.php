<?php

namespace App\Containers\AppSection\Product\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class UpdateProductRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
            'description' => ['nullable', 'string'],
            'image_path' => ['nullable', 'string'],
            'category_product_id' => ['required', 'integer', 'exists:category_products,id'],
            'type_id' => ['required', 'integer', 'exists:types,id'],
        ];
    }
}
