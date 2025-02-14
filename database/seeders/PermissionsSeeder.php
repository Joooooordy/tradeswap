<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        // Define permissions
        $permissions = [
            'manage users',
            'manage roles',
            'view products',
            'manage products',
            'place orders',
            'manage orders',
            'view orders',
            'manage inventory',
            'review products',
            'checkout',
        ];

        // Create permissions in the database
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
    }
}
