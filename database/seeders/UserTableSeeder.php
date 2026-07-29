<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'devadeva2330@gmail.com',
                'password'       => bcrypt('Deva@8363'),
                'remember_token' => null,
                'locale'         => '',
            ],
        ];

        User::insert($users);
    }
}
