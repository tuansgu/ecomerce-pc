<?php

namespace App\Containers\AppSection\Type\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class DeleteTypeRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
