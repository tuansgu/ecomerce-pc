<?php

namespace App\Containers\AppSection\CustomBuildItem\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class DeleteCustomBuildItemRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
