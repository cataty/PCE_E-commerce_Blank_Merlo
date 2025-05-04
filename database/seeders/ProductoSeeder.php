<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'producto_id' => 1,
                'nombre' => 'Remera Enough gris',
                'descripcion' => 'Remera gris melange con un adorable monstruito y el inspirador mensaje "You Are Enough"',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_enough_gris.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 2,
                'nombre' => 'Remera Enough marron',
                'descripcion' => 'Remera marron con un adorable monstruito y el inspirador mensaje "You Are Enough"',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_enough_marron.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 3,
                'nombre' => 'Remera Enough verde',
                'descripcion' => 'Remera verde con un adorable monstruito y el inspirador mensaje "You Are Enough"',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_enough_verde.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 4,
                'nombre' => 'Remera Honguito gris',
                'descripcion' => 'Remera gris melange con un diseño abstracto y psicodélico de un hongo. ¡Un toque de originalidad para tu look!',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_hongo_gris.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 5,
                'nombre' => 'Remera Honguito marron',
                'descripcion' => 'Remera marron con un diseño abstracto y psicodélico de un hongo. ¡Un toque de originalidad para tu look!',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_hongo_marron.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 6,
                'nombre' => 'Remera Honguito verde',
                'descripcion' => 'Remera verde con un diseño abstracto y psicodélico de un hongo. ¡Un toque de originalidad para tu look!',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_hongo_verde.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 7,
                'nombre' => 'Remera Hungry gris',
                'descripcion' => 'Remera gris melange con un monstruito de un ojo que dice "hello im hungry". ¡Perfecta para los que siempre tienen apetito con un toque de humor! (Como nosotros)',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_hungry_gris.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 8,
                'nombre' => 'Remera Hungry marron',
                'descripcion' => 'Remera marron con un monstruito de un ojo que dice "hello im hungry". ¡Perfecta para los que siempre tienen apetito con un toque de humor! (Como nosotros)',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_hungry_marron.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 9,
                'nombre' => 'Remera Hungry verde',
                'descripcion' => 'Remera verde con un monstruito de un ojo que dice "hello im hungry". ¡Perfecta para los que siempre tienen apetito con un toque de humor! (Como nosotros)',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_hungry_verde.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 10,
                'nombre' => 'Remera Marco gris',
                'descripcion' => 'Esta remera gris captura una escena curiosa: un pequeño monstruo parece asomarse o estar atrapado en un marco. Su diseño expresivo y llamativo seguramente generará conversaciones.',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_marco_gris.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 11,
                'nombre' => 'Remera Marco marron',
                'descripcion' => 'Esta remera marron captura una escena curiosa: un pequeño monstruo parece asomarse o estar atrapado en un marco. Su diseño expresivo y llamativo seguramente generará conversaciones.',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_marco_marron.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 12,
                'nombre' => 'Remera Marco verde',
                'descripcion' => 'Esta remera verde captura una escena curiosa: un pequeño monstruo parece asomarse o estar atrapado en un marco. Su diseño expresivo y llamativo seguramente generará conversaciones.',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_marco_verde.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 13,
                'nombre' => 'Remera Yeah gris',
                'descripcion' => 'Remera gris con un fantasma súper cool. ¡Para los que van con la mejor vibra siempre!',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_yeah_gris.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 14,
                'nombre' => 'Remera Yeah marron',
                'descripcion' => 'Remera marron con un fantasma súper cool. ¡Para los que van con la mejor vibra siempre!',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_yeah_marron.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 15,
                'nombre' => 'Remera Yeah verde',
                'descripcion' => 'Remera verde con un fantasma súper cool. ¡Para los que van con la mejor vibra siempre!',
                'precio' => 5000,
                'categoria' => 'Remeras',
                'imagen' => 'img/productos/t-shirt_yeah_verde.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
    ]);
    }
}
