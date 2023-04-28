<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name" => "Edwards",
            "email" => "edwards@example.com",
            'password' => Hash::make('admin123'),
            "email_verified_at" => now(),
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}
