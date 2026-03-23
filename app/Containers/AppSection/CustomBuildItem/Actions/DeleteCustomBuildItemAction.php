<?php

namespace App\Containers\AppSection\CustomBuildItem\Actions;

use App\Containers\AppSection\CustomBuildItem\Tasks\DeleteCustomBuildItemTask;
use App\Containers\AppSection\CustomBuildItem\UI\API\Requests\DeleteCustomBuildItemRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteCustomBuildItemAction extends ParentAction
{
    public function __construct(
        private readonly DeleteCustomBuildItemTask $deleteCustomBuildItemTask,
    ) {
    }

    public function run(DeleteCustomBuildItemRequest $request): bool
    {
        return $this->deleteCustomBuildItemTask->run($request->id);
    }
}
