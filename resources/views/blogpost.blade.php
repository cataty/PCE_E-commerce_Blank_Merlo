<x-layout>
<x-slot:title>Blogpost:</x-slot:title>
        <div class="w-full sm:w-8/12 lg:w-4/12 mx-auto my-12">
            <p class="mb-12 uppercase text-sm font-bold text-lightgreen dark:text-gray-400">
                {{ $blogpost->categoria_blog->nombre_categoria }}
            </p>
        <h1 class="mb-4 font-bold text-4xl text-darkorange md:text-4xl">{{$blogpost["titulo"]}}</h1>
        <img class="mb-8" src="{{ asset($blogpost['imagen'])}}" alt="{{$blogpost['nombre']}}" />
        <p class="mb-12 uppercase text-sm font-bold text-lightgreen dark:text-gray-400">
            {{$blogpost["updated_at"]}}
        </p>
        <p class=" text-darkgreen dark:text-gray-400">
            {{$blogpost["contenido"]}}
        </p>
    </div>
<x-productosPreview :productosAleatorios="$productosAleatorios" />
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</x-layout>
