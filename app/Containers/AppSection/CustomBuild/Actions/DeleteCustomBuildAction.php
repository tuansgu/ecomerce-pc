<?php

namespace App\Containers\AppSection\CustomBuild\Actions;

use App\Containers\AppSection\CustomBuild\Tasks\DeleteCustomBuildTask;
use App\Containers\AppSection\CustomBuild\UI\API\Requests\DeleteCustomBuildRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteCustomBuildAction extends ParentAction
{
    public function __construct(
        private readonly DeleteCustomBuildTask $deleteCustomBuildTask,
    ) {
    }

    public function run(DeleteCustomBuildRequest $request): bool
    {
        return $this->deleteCustomBuildTask->run($request->id);
    }
}
