<?php

namespace App\Containers\AppSection\CategoryProduct\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class DeleteCategoryProductRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
