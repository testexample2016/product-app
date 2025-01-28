<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'test1', 'email' => 'test1@test.com', 'password' => Hash::make('Test123$')],
            ['name' => 'test2', 'email' => 'test2@test.com', 'password' => Hash::make('Test123$')],
            ['name' => 'test3', 'email' => 'test3@test.com','password' => Hash::make('Test123$')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
