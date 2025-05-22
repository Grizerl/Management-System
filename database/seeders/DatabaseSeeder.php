<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
             'name' => 'Admin 1',
             'email' => 'admin1@gmail.com',
             'password' => Hash::make('adminpassword1'),
             'role' => 'admin',
        ]);

        User::create([
            'name' => 'Admin 2',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('adminpassword2'),
            'role' => 'admin',
       ]);
    }
}
