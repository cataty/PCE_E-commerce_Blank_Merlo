<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cart_items')->insert([
            [
                'id' => 1,
                'user_id' => 2,
                'producto_id' => 1,
                'cantidad' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'producto_id' => 3,
                'cantidad' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
