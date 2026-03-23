<?php

namespace App\Containers\AppSection\DetailOrder\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class FindDetailOrderByIdRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
