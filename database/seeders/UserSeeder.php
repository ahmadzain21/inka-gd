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
            ['name' => 'demo',
            'nip' => '0823111',
            'password' => Hash::make('12345678'),
            'role' => 'Operator'],
            ['name' => 'admin',
            'nip' => '0823112',
            'password' => Hash::make('12345678'),
            'role' => 'Admin']
            
        ]);
    }
}
