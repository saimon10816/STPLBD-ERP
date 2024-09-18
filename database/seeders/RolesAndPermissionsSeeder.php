<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create Permissions
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'view inventory']);
        Permission::create(['name' => 'manage inventory']);
        Permission::create(['name' => 'manage orders']);
        Permission::create(['name' => 'view reports']);

        // Create Roles and Assign Permissions to Roles
        $superAdmin = Role::create(['name' => 'super-admin']);
        $superAdmin->givePermissionTo(Permission::all()); // Super Admin has all permissions

        $inventoryManager = Role::create(['name' => 'inventory-manager']);
        $inventoryManager->givePermissionTo(['view inventory', 'manage inventory']);

        $salesManager = Role::create(['name' => 'sales-manager']);
        $salesManager->givePermissionTo(['manage orders']);

        $user = Role::create(['name' => 'user']);
        $user->givePermissionTo(['view inventory']);
    }
}

