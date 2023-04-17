<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Adrian Cavallino',
                'email' => 'adrian@inaakucafe.com',
                'type' => 1,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Muhammad Nur Armana',
                'email' => 'arman@inaakucafe.com',
                'type' => 0,
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}