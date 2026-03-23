<?php

namespace App\Containers\AppSection\Type\Actions;

use App\Containers\AppSection\Type\Models\Type;
use App\Containers\AppSection\Type\Tasks\CreateTypeTask;
use App\Containers\AppSection\Type\UI\API\Requests\CreateTypeRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateTypeAction extends ParentAction
{
    public function __construct(
        private readonly CreateTypeTask $createTypeTask,
    ) {
    }

    public function run(CreateTypeRequest $request): Type
    {
        $data = $request->sanitize([
            'name',
        ]);

        return $this->createTypeTask->run($data);
    }
}
