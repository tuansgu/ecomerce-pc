<?php

namespace App\Containers\AppSection\DetailCart\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class FindDetailCartByIdRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
