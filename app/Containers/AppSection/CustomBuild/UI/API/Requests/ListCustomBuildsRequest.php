<?php

namespace App\Containers\AppSection\CustomBuild\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class ListCustomBuildsRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
