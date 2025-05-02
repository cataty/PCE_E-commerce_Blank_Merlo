<?php
/** @var \Illuminate\Database\Eloquent\Collection\App\Models\Productos[] $productos */
?>

<x-layout>
<x-slot:title>Productos</x-slot:title>
    <h1 class="mb-4 text-4xl text-gray-900 md:text-5xl lg:text-6xl">Productos</h1>

    <?php
    foreach ($productos as $producto):
    ?>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ $producto->imagen }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $producto->nombre }}</h3>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $producto->descripcion }}</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Ver más
                </a>
            </div>
        </div>
    <?php
    endforeach;
    ?>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</x-layout>
