<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assign roles to users
        $admin = User::where('email', 'test1@test.com')->first();
        $employee = User::where('email', 'test2@test.com')->first();
        $customer = User::where('email', 'test3@test.com')->first();

        $adminRole = Role::where('name', 'Admin')->first();
        $employeeRole = Role::where('name', 'Employee')->first();
        $customerRole = Role::where('name', 'Customer')->first();

        $admin->roles()->attach($adminRole->id);
        $employee->roles()->attach($employeeRole->id);
        $customer->roles()->attach($customerRole->id);
    }
}
