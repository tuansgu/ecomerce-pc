<?php

namespace App\Containers\AppSection\CustomBuild\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class UpdateCustomBuildRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
