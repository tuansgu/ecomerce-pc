<?php

namespace App\Containers\AppSection\Cart\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class UpdateCartRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
