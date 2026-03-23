<?php

namespace App\Containers\AppSection\Type\Actions;

use App\Containers\AppSection\Type\Models\Type;
use App\Containers\AppSection\Type\Tasks\UpdateTypeTask;
use App\Containers\AppSection\Type\UI\API\Requests\UpdateTypeRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateTypeAction extends ParentAction
{
    public function __construct(
        private readonly UpdateTypeTask $updateTypeTask,
    ) {
    }

    public function run(UpdateTypeRequest $request): Type
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateTypeTask->run($data, $request->id);
    }
}
