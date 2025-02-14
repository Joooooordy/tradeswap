<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Assign permissions to roles
        $admin = Role::findByName('admin');
        $admin->givePermissionTo([
            'manage users',
            'manage roles',
            'view products',
            'manage products',
            'place orders',
            'manage orders',
            'view orders',
            'manage inventory',
            'review products',
            'checkout'
        ]);

        $seller = Role::findByName('seller');
        $seller->givePermissionTo([
            'view products',
            'manage products',
            'place orders',
            'manage orders',
            'view orders',
            'manage inventory',
            'review products',
            'checkout'
        ]);

        $customer = Role::findByName('customer');
        $customer->givePermissionTo([
            'view products',
            'place orders',
            'view orders',
            'review products',
            'checkout'
        ]);

        $guest = Role::findByName('guest');
        $guest->givePermissionTo([
            'view products',
        ]);
    }
}
