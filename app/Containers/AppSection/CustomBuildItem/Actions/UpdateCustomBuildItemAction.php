<?php

namespace App\Containers\AppSection\CustomBuildItem\Actions;

use App\Containers\AppSection\CustomBuildItem\Models\CustomBuildItem;
use App\Containers\AppSection\CustomBuildItem\Tasks\UpdateCustomBuildItemTask;
use App\Containers\AppSection\CustomBuildItem\UI\API\Requests\UpdateCustomBuildItemRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateCustomBuildItemAction extends ParentAction
{
    public function __construct(
        private readonly UpdateCustomBuildItemTask $updateCustomBuildItemTask,
    ) {
    }

    public function run(UpdateCustomBuildItemRequest $request): CustomBuildItem
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateCustomBuildItemTask->run($data, $request->id);
    }
}
