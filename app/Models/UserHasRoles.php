<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserHasRoles extends Pivot
{
    protected $table = 'user_has_roles';
}
