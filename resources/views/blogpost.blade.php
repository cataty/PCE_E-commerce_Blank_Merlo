<x-layout>
<x-slot:title>Blogpost:</x-slot:title>
        <div class="w-full sm:w-8/12 lg:w-4/12 mx-auto my-12">

        <h1 class="mb-4 text-4xl text-gray-900 md:text-4xl">{{$blogpost["titulo"]}}</h1>
        <p class=" text-gray-700 dark:text-gray-400">
            <img class="mb-12" src="{{ asset($blogpost['imagen'])}}" alt="{{$blogpost['nombre']}}" />
            {{$blogpost["contenido"]}}
        </p>
    </div>
<x-productosPreview :productosAleatorios="$productosAleatorios" />
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</x-layout>
