<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Master2',
                'email' => 'master2@inaakucafe.com',
                'password' => bcrypt('123456'),
                'type' => 1,
            ]
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
        
    }
}
