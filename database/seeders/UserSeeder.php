<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Define the available roles
        $roles = Role::all()->pluck('name')->toArray();

        // Seed 20 random users
        User::factory(20)->create()->each(function ($user) use ($roles) {
            // Assign a random role from the available roles
            $randomRole = $roles[array_rand($roles)];  // Randomly pick a role
            $user->assignRole($randomRole); // Assign the random role to the user
            $user->roles()->updateExistingPivot($user->id, ['model_type' => get_class($user)]);
        });

        // Get all permissions
        $permissions = Permission::all();

        // Get all users
        $users = User::all();

        // Loop through each user and assign random permissions
        foreach ($users as $user) {
            // Randomly assign 1 to 3 permissions to each user
            $randomPermissions = $permissions->random(rand(1, 3));

            // Assign the permissions to the user
            foreach ($randomPermissions as $permission) {
                $user->givePermissionTo($permission);
            }
        }
    }
}
