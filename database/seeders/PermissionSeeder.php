<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'create', 'description' => 'Create a resource'],
            ['name' => 'read', 'description' => 'Read a resource'],
            ['name' => 'update', 'description' => 'Update a resource'],
            ['name' => 'delete', 'description' => 'Delete a resource'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
