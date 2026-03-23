<?php

namespace App\Containers\AppSection\CustomBuildItem\Actions;

use App\Containers\AppSection\CustomBuildItem\Models\CustomBuildItem;
use App\Containers\AppSection\CustomBuildItem\Tasks\FindCustomBuildItemByIdTask;
use App\Containers\AppSection\CustomBuildItem\UI\API\Requests\FindCustomBuildItemByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindCustomBuildItemByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindCustomBuildItemByIdTask $findCustomBuildItemByIdTask,
    ) {
    }

    public function run(FindCustomBuildItemByIdRequest $request): CustomBuildItem
    {
        return $this->findCustomBuildItemByIdTask->run($request->id);
    }
}
