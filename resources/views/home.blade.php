<x-layout>
<x-slot:title>Home</x-slot:title>
    <section class="w-screen bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="lg:mt-0 lg:col-span-5 lg:flex mr-12 ml-12">
            <img src="{{ asset('img/illu_main.svg') }}" alt="Illustration" class="w-full h-full object-cover">
        </div>    
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 pt-12 text-4xl text-darkgreen font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Imaginación sin limites</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                 En Monstierra, cada remera es una obra de arte única. Cada prenda combina imaginación y originalidad, reflejando la pasión por lo diferente y lo hecho a mano. ¡Perfecta para quienes buscan destacar con estilo!
            </p>
            <a href="/productos/todos" class="inline-flex items-center justify-center px-5 py-3 text-base font-bold text-center bg-lightorange text-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Ver Productos
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a> 
        </div>
            
    </div>
</section>
    <x-productosPreview :productosAleatorios="$productosAleatorios" />
<section class="w-screen bg-lightgreen dark:bg-gray-900">
    <div class="flex max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:grid-cols-12 justify-center">
        <div class="place-self-center lg:col-span-7" id="about">
            <h2 class="max-w-2xl mb-4 text-4xl text-lightorange font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Acerca de Nosotros</h2>
            <p class="max-w-2xl mb-6 font-light text-white lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                Somos una startup artesanal con 5 años de experiencia en la creación de remeras únicas y originales. Nuestros diseños están inspirados en la creatividad y la pasión por lo diferente, destacando por su estilo auténtico. Cada prenda refleja nuestro compromiso con el arte independiente y la calidad hecha a mano. Durante estos años, hemos crecido gracias a quienes valoran la originalidad y buscan destacar con personalidad. ¡Únete a Monstierra y lleva contigo una pieza de imaginación sin límites!
            </p>
        </div>
    </div>
</section>
<x-blogPreview :blogpostsRecientes="$blogpostsRecientes" />
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</x-layout>