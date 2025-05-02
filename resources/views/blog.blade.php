<?php
    /** @var \Illuminate\Database\Eloquent\Collection\App\Models\Blogpost[] $blog */
?>

<x-layout>
<x-slot:title>Blog</x-slot:title>
    <h1 class="mb-4 text-4xl text-gray-900 md:text-5xl lg:text-6xl">Blog</h1>
    @foreach ($blog as $blogpost):
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ $blogpost->imagen }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $blogpost->titulo }}</h3>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $blogpost->contenido }}</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Ver más
                </a>
            </div>
        </div>
    @endforeach;
</x-layout>
