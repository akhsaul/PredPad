<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            'name' => 'Akhsaul',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin.com'),
        ]);
    }
}
