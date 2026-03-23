<?php

namespace App\Containers\AppSection\CustomBuild\Actions;

use App\Containers\AppSection\CustomBuild\Models\CustomBuild;
use App\Containers\AppSection\CustomBuild\Tasks\FindCustomBuildByIdTask;
use App\Containers\AppSection\CustomBuild\UI\API\Requests\FindCustomBuildByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindCustomBuildByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindCustomBuildByIdTask $findCustomBuildByIdTask,
    ) {
    }

    public function run(FindCustomBuildByIdRequest $request): CustomBuild
    {
        return $this->findCustomBuildByIdTask->run($request->id);
    }
}
