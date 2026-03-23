<?php

namespace App\Containers\AppSection\CustomBuildItem\Data\Factories;

use App\Containers\AppSection\CustomBuildItem\Models\CustomBuildItem;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of CustomBuildItem
 *
 * @extends ParentFactory<TModel>
 */
final class CustomBuildItemFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = CustomBuildItem::class;

    public function definition(): array
    {
        return [];
    }
}
