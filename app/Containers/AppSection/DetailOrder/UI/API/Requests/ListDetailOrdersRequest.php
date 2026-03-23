<?php

namespace App\Containers\AppSection\DetailOrder\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class ListDetailOrdersRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
