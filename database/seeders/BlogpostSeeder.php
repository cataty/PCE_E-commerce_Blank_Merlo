<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogpostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog')->insert([
            [
                'usuario_id' => 1,
                'titulo' => 'Celebrando 5 años con un nuevo diseño',
                'contenido' => '
Ya hace cinco años que nació nuestra marca artesanal de remeras con un objetivo claro: llevar alegría y originalidad a cada prenda. Inspirados por la creatividad y el amor por los pequeños detalles, decidimos crear diseños únicos protagonizados por monstruos adorables. Cada uno de ellos tiene su propia personalidad, y juntos han conquistado corazones con sus mensajes positivos y su estilo único.

Hoy, estamos emocionados de celebrar nuestro primer aniversario con un diseño especial: "El Monstruo Festivo". Este nuevo integrante de nuestra familia es un pequeño monstruo lleno de colores vibrantes, globos y un sombrero de fiesta, listo para contagiar su entusiasmo. Su mensaje, "Celebra cada día", nos recuerda la importancia de disfrutar los pequeños momentos y encontrar motivos para sonreír.

Este diseño no solo marca nuestro aniversario, sino que también simboliza el crecimiento y el apoyo que hemos recibido de nuestra comunidad. Gracias a ustedes, hemos podido convertir nuestra pasión en una marca que celebra la creatividad y la autenticidad.

¡Únete a la celebración con "El Monstruo Festivo" y lleva contigo un pedacito de nuestra historia! 🎉
                ',
                'categoria_blog_id' => '1',
                'imagen' => 'img/blog1.webp',
                'autor' => 'John',
                'created_at' => now(),
                'updated_at' => now(),
            ],
    ]);
    }
}
