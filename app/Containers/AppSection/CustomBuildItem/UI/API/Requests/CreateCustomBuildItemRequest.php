<?php

namespace App\Containers\AppSection\CustomBuildItem\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class CreateCustomBuildItemRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [
            'product_id' => ['required', 'integer', 'exists:products,id'],
            'quantity' => ['required', 'integer', 'min:1'],
            'price' => ['required', 'integer', 'min:0'],
        ];
    }
}
