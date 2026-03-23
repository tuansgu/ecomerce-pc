<?php

namespace App\Containers\AppSection\CustomBuild\Actions;

use App\Containers\AppSection\CustomBuild\Tasks\ListCustomBuildsTask;
use App\Containers\AppSection\CustomBuild\UI\API\Requests\ListCustomBuildsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListCustomBuildsAction extends ParentAction
{
    public function __construct(
        private readonly ListCustomBuildsTask $listCustomBuildsTask,
    ) {
    }

    public function run(ListCustomBuildsRequest $request): mixed
    {
        return $this->listCustomBuildsTask->run();
    }
}
