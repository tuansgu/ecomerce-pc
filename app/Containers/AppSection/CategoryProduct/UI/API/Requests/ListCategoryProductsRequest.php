<?php

namespace App\Containers\AppSection\CategoryProduct\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class ListCategoryProductsRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
