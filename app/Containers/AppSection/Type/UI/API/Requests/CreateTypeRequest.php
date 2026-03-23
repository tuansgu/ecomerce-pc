<?php

namespace App\Containers\AppSection\Type\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class CreateTypeRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
