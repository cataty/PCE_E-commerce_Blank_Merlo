<?php
    /** @var \Illuminate\Database\Eloquent\Collection\App\Models\Blogpost[] $blog */
?>

<x-layout>
<x-slot:title>Blog</x-slot:title>
<div class="flex flex-wrap justify-center gap-4">
    <h1 class="max-w-2xl mb-12 pt-12 text-4xl text-lightgreen font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-whitel">Blog</h1>
    <div class="flex flex-wrap justify-center gap-4">
    @foreach ($blog as $blogpost)

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('blogpost', ['id' => $blogpost->blogpost_id]) }}">
                <img class="rounded-t-lg" src="{{ asset($blogpost->imagen)}}" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('blogpost', ['id' => $blogpost->blogpost_id]) }}">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-darkgreen dark:text-white">{{ $blogpost->nombre }}</h3>
                </a>
                <p class="mb-8 text-lightgreen">precio: {{ $blogpost->precio }}$</p>
                {{-- <p class="mb-3 font-normal text-lightgreen dark:text-gray-400">{{ $blogpost->descripcion }}</p> --}}
                {{-- <p class="mb-3 font-normal text-lightgreen dark:text-gray-400">{{ $blogpost->stock }}</p> --}}
                {{-- <p class="mb-3 font-normal text-lightgreen dark:text-gray-400">{{ $blogpost->descripcion }}</p> --}}
                <a href="{{ route('blogpost', ['id' => $blogpost->blogpost_id]) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Ver más
                </a>
            </div>
        </div>

    @endforeach;
    </div>
</div>
</x-layout>
