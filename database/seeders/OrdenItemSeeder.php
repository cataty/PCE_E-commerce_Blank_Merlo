<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdenItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orden_items')->insert([
            [
                'orden_id' => 1,
                'producto_id' => 1,
                'cantidad' => 2,
                'precio_unitario' => 5000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'orden_id' => 1,
                'producto_id' => 2,
                'cantidad' => 1,
                'precio_unitario' => 3000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'orden_id' => 2,
                'producto_id' => 3,
                'cantidad' => 1,
                'precio_unitario' => 7000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
