<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FrontdeskUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('frontdesk_users')->insert([
            'name' => 'Front Desk Admin',
            'email' => 'frontdesk@smashlab.com',
            'password' => Hash::make('frontdesk2026'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}