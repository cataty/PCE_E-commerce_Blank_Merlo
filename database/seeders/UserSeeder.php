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
        [            
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('hola1234'),
            'created_at' => now(),
            'updated_at' => now(),
            'compras' => 'Remera Yeah verde',
        ],
        [
            'id' => 2,
            'name' => 'Tatjana',
            'email' => 'tatjana@gmail.com',
            'password' => Hash::make('hola1234'),
            'created_at' => now(),
            'updated_at' => now(),
            'compras' => 'Remera Yeah gris',
        ],
        [
            'id' => 3,
            'name' => 'Macarena',
            'email' => 'Macarena@gmail.com',
            'password' => Hash::make('hola1234'),
            'created_at' => now(),
            'updated_at' => now(),
            'compras' => 'Remera Yeah marron',
        ],
        ]);
    }
}
