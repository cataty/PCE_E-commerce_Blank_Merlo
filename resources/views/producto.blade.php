<x-layout>
<x-slot:title>Producto:</x-slot:title>
    <div class="w-full sm:w-8/12 lg:w-4/12 mx-auto my-12">

        <h1 class="mb-4 text-4xl text-gray-900 md:text-4xl">{{$producto["nombre"]}}</h1>
        <p class=" text-gray-700 dark:text-gray-400">
            <img class="mb-12" src="{{ asset($producto['imagen'])}}" alt="{{$producto['nombre']}}" />
            {{$producto["descripcion"]}}
        </p>
        <p class=" text-lightgreen dark:text-gray-400 mt-4 mb-12">
            precio: {{$producto["precio"]}}$
        </p>
        <form>
            <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Agregar al carrito
            </button>
    </div>

    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</x-layout>
