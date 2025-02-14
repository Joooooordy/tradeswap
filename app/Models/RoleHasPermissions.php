<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RoleHasPermissions extends Pivot
{
    protected $table = 'role_has_permissions';
}
