<?php

namespace App\Containers\AppSection\CustomBuildItem\Actions;

use App\Containers\AppSection\CustomBuildItem\Models\CustomBuildItem;
use App\Containers\AppSection\CustomBuildItem\Tasks\CreateCustomBuildItemTask;
use App\Containers\AppSection\CustomBuildItem\UI\API\Requests\CreateCustomBuildItemRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateCustomBuildItemAction extends ParentAction
{
    public function __construct(
        private readonly CreateCustomBuildItemTask $createCustomBuildItemTask,
    ) {
    }

    public function run(CreateCustomBuildItemRequest $request): CustomBuildItem
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->createCustomBuildItemTask->run($data);
    }
}
