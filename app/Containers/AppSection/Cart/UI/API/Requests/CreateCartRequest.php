<?php

namespace App\Containers\AppSection\Cart\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class CreateCartRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
