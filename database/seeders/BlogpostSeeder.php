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
                'titulo' => 'Celebrando 5 Años con un Nuevo Diseño',
                'contenido' => '
Ya hace cinco años que nació nuestra marca artesanal de remeras con un objetivo claro: llevar alegría y originalidad a cada prenda. Inspirados por la creatividad y el amor por los pequeños detalles, decidimos crear diseños únicos protagonizados por monstruos adorables. Cada uno de ellos tiene su propia personalidad, y juntos han conquistado corazones con sus mensajes positivos y su estilo único.

Hoy, estamos emocionados de celebrar nuestro primer aniversario con un diseño especial: "El Monstruo Festivo". Este nuevo integrante de nuestra familia es un pequeño monstruo lleno de colores vibrantes, globos y un sombrero de fiesta, listo para contagiar su entusiasmo. Su mensaje, "Celebra cada día", nos recuerda la importancia de disfrutar los pequeños momentos y encontrar motivos para sonreír.

Este diseño no solo marca nuestro aniversario, sino que también simboliza el crecimiento y el apoyo que hemos recibido de nuestra comunidad. Gracias a ustedes, hemos podido convertir nuestra pasión en una marca que celebra la creatividad y la autenticidad.

¡Únete a la celebración con "El Monstruo Festivo" y lleva contigo un pedacito de nuestra historia! 🎉
                ',
                'categoria_blog_id' => '2',
                'imagen' => 'blog/blog1.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => 1,
                'titulo' => 'Presentando: Sofia, la Diseñadora Detrás de Nuestros Monstruos',
                'contenido' => '
Conoce a Sofía: El Talento Creativo Detrás de Nuestros Diseños

En el corazón de nuestra marca de remeras artesanales se encuentra Sofía, una joven diseñadora llena de talento y pasión. Desde pequeña, Sofía mostró un amor especial por el arte y la creatividad, pasando horas dibujando personajes únicos que parecían cobrar vida en el papel. Hoy, esos mismos personajes son los protagonistas de nuestras remeras, llevando alegría y originalidad a cada diseño.

Sofía se inspira en los pequeños detalles de la vida cotidiana: una sonrisa, un día soleado o incluso una taza de café. Su habilidad para transformar estas experiencias en adorables monstruos con personalidades únicas es lo que hace que nuestras prendas sean tan especiales. Cada diseño cuenta una historia, y Sofía se asegura de que cada monstruo transmita un mensaje positivo y auténtico.

Además de su talento artístico, Sofía es una firme defensora de la sostenibilidad. Trabaja con materiales ecológicos y procesos responsables, asegurándose de que cada remera no solo sea hermosa, sino también respetuosa con el medio ambiente.

Gracias a Sofía, nuestra marca no solo crea ropa, sino que también inspira a las personas a celebrar su individualidad. Estamos orgullosos de tenerla como parte de nuestro equipo y emocionados por los diseños que aún están por venir. ¡El futuro es brillante con Sofía a bordo!
                ',
                'categoria_blog_id' => '1',
                'imagen' => 'blog/blog2.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_id' => 1,
                'titulo' => 'Tendencias Emergentes en el Diseño de Remeras',
                'contenido' => '
El mundo del diseño de remeras está en constante evolución, y este año no es la excepción. Las tendencias actuales combinan creatividad, sostenibilidad y tecnología para ofrecer prendas únicas que conectan con las emociones y valores de los consumidores.

Una de las principales tendencias es el diseño minimalista con mensajes poderosos. Frases cortas y directas, acompañadas de tipografías limpias, están dominando el mercado. Estas remeras no solo son estéticamente atractivas, sino que también permiten a las personas expresar su identidad y valores de manera sencilla.

Otra tendencia destacada es el uso de ilustraciones personalizadas. Diseños únicos, como personajes o patrones hechos a mano, están ganando popularidad, ya que los consumidores buscan prendas que reflejen su individualidad. En nuestra marca, los monstruos adorables con personalidades únicas son un ejemplo perfecto de esta tendencia.

Además, la sostenibilidad sigue siendo clave. Los consumidores prefieren materiales orgánicos y procesos de producción responsables. Esto no solo reduce el impacto ambiental, sino que también añade valor a cada prenda.

Por último, la tecnología interactiva está comenzando a influir en el diseño de remeras. Desde tintas que cambian de color con la temperatura hasta códigos QR que cuentan historias detrás del diseño, la innovación está transformando la experiencia del usuario.

¡El futuro del diseño de remeras nunca ha sido tan emocionante!
                ',
                'categoria_blog_id' => '3',
                'imagen' => 'blog/blog3.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
    ]);
    }
}
