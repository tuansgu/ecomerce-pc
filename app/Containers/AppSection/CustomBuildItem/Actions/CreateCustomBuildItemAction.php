<?php

namespace App\Containers\AppSection\CustomBuildItem\Actions;

use App\Containers\AppSection\CustomBuildItem\Models\CustomBuildItem;
use App\Containers\AppSection\CustomBuildItem\Tasks\CreateCustomBuildItemTask;
use App\Containers\AppSection\CustomBuildItem\UI\API\Requests\CreateCustomBuildItemRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use App\Containers\AppSection\CustomBuild\Models\CustomBuild;

final class CreateCustomBuildItemAction extends ParentAction
{
    public function __construct(
        private readonly CreateCustomBuildItemTask $createCustomBuildItemTask,
    ) {}

    public function run(CreateCustomBuildItemRequest $request): CustomBuildItem
    {
        $data = $request->sanitize([
            'product_id',
            'quantity',
            'price',
        ]);

        $build = CustomBuild::firstOrCreate(
            ['user_id' => $request->user()->id]
        );

        $data['custom_build_id'] = $build->id;

        return $this->createCustomBuildItemTask->run($data);
    }
}
