<?php

namespace App\Containers\AppSection\CustomBuildItem\Actions;

use App\Containers\AppSection\CustomBuildItem\Tasks\ListCustomBuildItemsTask;
use App\Containers\AppSection\CustomBuildItem\UI\API\Requests\ListCustomBuildItemsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListCustomBuildItemsAction extends ParentAction
{
    public function __construct(
        private readonly ListCustomBuildItemsTask $listCustomBuildItemsTask,
    ) {
    }

    public function run(ListCustomBuildItemsRequest $request): mixed
    {
        return $this->listCustomBuildItemsTask->run();
    }
}
