<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ordenes')->insert([
            [
                'id' => 1,
                'user_id' => 2,
                'estado' => 'pendiente',
                'total' => 100.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'estado' => 'enviado',
                'total' => 200.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'total' => 150.00,
                'estado' => 'pagada',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
