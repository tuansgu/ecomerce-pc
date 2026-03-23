<?php

namespace App\Containers\AppSection\CustomBuildItem\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class ListCustomBuildItemsRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
