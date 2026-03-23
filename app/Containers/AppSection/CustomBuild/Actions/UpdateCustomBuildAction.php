<?php

namespace App\Containers\AppSection\CustomBuild\Actions;

use App\Containers\AppSection\CustomBuild\Models\CustomBuild;
use App\Containers\AppSection\CustomBuild\Tasks\UpdateCustomBuildTask;
use App\Containers\AppSection\CustomBuild\UI\API\Requests\UpdateCustomBuildRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateCustomBuildAction extends ParentAction
{
    public function __construct(
        private readonly UpdateCustomBuildTask $updateCustomBuildTask,
    ) {
    }

    public function run(UpdateCustomBuildRequest $request): CustomBuild
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateCustomBuildTask->run($data, $request->id);
    }
}
