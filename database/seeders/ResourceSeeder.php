<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resource;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $resources = [
            ['name' => 'product', 'description' => 'Product'],
        ];

        foreach ($resources as $resource) {
            Resource::create($resource);
        }
    }
}
