<?php

namespace App\Containers\AppSection\CustomBuild\Data\Factories;

use App\Containers\AppSection\CustomBuild\Models\CustomBuild;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of CustomBuild
 *
 * @extends ParentFactory<TModel>
 */
final class CustomBuildFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = CustomBuild::class;

    public function definition(): array
    {
        return [];
    }
}
