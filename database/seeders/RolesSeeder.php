<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    public function run()
    {
        // Define roles
        $roles = [
            'admin',
            'seller',
            'customer',
            'guest',
        ];

        // Create roles in the database
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }
    }
}
