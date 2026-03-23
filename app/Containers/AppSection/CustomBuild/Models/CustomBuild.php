<?php

namespace App\Containers\AppSection\CustomBuild\Models;

use App\Ship\Parents\Models\Model as ParentModel;
use App\Containers\AppSection\User\Models\User;

final class CustomBuild extends ParentModel
{
    protected $fillable = [
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
