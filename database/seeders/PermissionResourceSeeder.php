<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Resource;

class PermissionResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assign permissions to resources
        $readPermission = Permission::where('name', 'read')->first();
        $createPermission = Permission::where('name', 'create')->first();
		$updatePermission = Permission::where('name', 'update')->first();
		$deletePermission = Permission::where('name', 'delete')->first();



         $allResources = Resource::all();

         $readPermission->resources()->attach($allResources);
         $createPermission->resources()->attach($allResources);
         $updatePermission->resources()->attach($allResources);
         $deletePermission->resources()->attach($allResources);


    }
}
