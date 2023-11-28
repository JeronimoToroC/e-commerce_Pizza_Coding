<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jerónimo Toro C',
            'email' => 'jeronimo.1701921567@ucaldas.edu.co',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'profile_photo_path' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

