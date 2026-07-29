<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminUser;
// or use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // If using AdminUser model
        AdminUser::create([
            'name' => 'Admin',
            'email' => 'admin@smashlab.com',
            'password' => Hash::make('admin2026'),
        ]);

        // If using User model with role
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@smashlab.com',
        //     'password' => Hash::make('password123'),
        //     'role' => 'admin',
        // ]);
    }
}