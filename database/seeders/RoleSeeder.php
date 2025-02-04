<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Admin', 'description' => 'Administrator with full access'],
            ['name' => 'Employee', 'description' => 'Employee with limited access'],
            ['name' => 'Customer', 'description' => 'Customer employee with basic access'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
