<?php

namespace App\Containers\AppSection\DetailCart\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class CreateDetailCartRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
