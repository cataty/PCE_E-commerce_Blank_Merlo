<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoria_blog')->insert([
            ['nombre_categoria' => 'Diseñadores'],
            ['nombre_categoria' => 'Novedades de la marca'],
            ['nombre_categoria' => 'Tendencias'],
        ]);
    }
}
