<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assign permissions to roles
        $adminRole = Role::where('name', 'Admin')->first();
        $employeeRole = Role::where('name', 'Employee')->first();
        $customerRole = Role::where('name', 'Customer')->first();

        $allPermissions = Permission::all();
        $readPermission = Permission::where('name', 'read')->first();
        $createPermission = Permission::where('name', 'create')->first();
		$updatePermission = Permission::where('name', 'update')->first();
		$deletePermission = Permission::where('name', 'delete')->first();

        // Admin has all permissions
        $adminRole->permissions()->attach($allPermissions);

        // Employee can read and create
        $employeeRole->permissions()->attach([$readPermission->id, $createPermission->id, $updatePermission->id]);

        // Employee can only read
        $customerRole->permissions()->attach($readPermission->id);
    }
}
