<?php

namespace App\Containers\AppSection\CustomBuild\Models;

use App\Ship\Parents\Models\Model as ParentModel;
use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\CustomBuildItem\Models\CustomBuildItem;

final class CustomBuild extends ParentModel
{
    protected $fillable = [
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function customBuildItems()
    {
        return $this->hasMany(CustomBuildItem::class);
    }
}
