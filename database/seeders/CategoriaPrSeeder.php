<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaPrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias-pr')->insert([
            [
                'nombre' => 'Remeras',
                'id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
        ]);
    }
}
