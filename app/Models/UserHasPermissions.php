<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserHasPermissions extends Pivot
{
    protected $table = 'user_has_permissions';
}
