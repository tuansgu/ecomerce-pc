<?php

namespace App\Containers\AppSection\CategoryProduct\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class CreateCategoryProductRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
        ];
    }
}
