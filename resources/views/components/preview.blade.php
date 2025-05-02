<section class="preview w-screen flex flex-col items-center justify-center">
    <h2 class="mb-4 text-4xl text-darkorange font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Productos destacados</h2>
    <div class ="flex flex-wrap justify-center gap-4">

    <?php
        foreach ($productos as $producto):
        for($i = 0; $i < 3; $i++): //mejorar. Debe traer tres productos aleatorios o destacados
    ?>


        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('producto', ['id' => $producto->producto_id]) }}">
                <img class="rounded-t-lg" src="{{ $producto->imagen }}" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('producto', ['id' => $producto->producto_id]) }}">
                    <h3 class="mb-2 text-2xl font-bold tracking-tight text-darkgreen dark:text-white">{{ $producto->nombre }}</h3>
                </a>
                <p class="mb-3 font-normal text-lightgreen dark:text-gray-400">{{ $producto->descripcion }}</p>
                <a href="{{ route('producto', ['id' => $producto->producto_id]) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Ver más
                </a>
            </div>
        </div>
    <?php
    endfor;
    endforeach;
    ?>
    </div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</section>