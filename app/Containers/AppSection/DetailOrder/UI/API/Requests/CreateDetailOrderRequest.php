<?php

namespace App\Containers\AppSection\DetailOrder\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class CreateDetailOrderRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
