<?php

namespace App\Containers\AppSection\CustomBuild\Actions;

use App\Containers\AppSection\CustomBuild\Models\CustomBuild;
use App\Containers\AppSection\CustomBuild\Tasks\CreateCustomBuildTask;
use App\Containers\AppSection\CustomBuild\UI\API\Requests\CreateCustomBuildRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateCustomBuildAction extends ParentAction
{
    public function __construct(
        private readonly CreateCustomBuildTask $createCustomBuildTask,
    ) {
    }

    public function run(CreateCustomBuildRequest $request): CustomBuild
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->createCustomBuildTask->run($data);
    }
}
