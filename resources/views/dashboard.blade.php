<x-layout>
<x-slot:title>Dashboard</x-slot:title>
    <h1 class="mb-4 text-4xl text-gray-900 md:text-5xl lg:text-6xl">Dashboard</h1>
   

<div id="accordion-collapse" data-accordion="collapse">
  <h2 id="accordion-collapse-heading-1">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
      <span>Usuarios</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Nombre</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Compras</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($usuarios as $usuario)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $usuario->nombre }}</td>
                <td class="px-6 py-4">{{ $usuario->email }}</td>
                {{-- <td class="px-6 py-4">{{ $usuario->compras }}</td> --}}
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
  </div>
  <h2 id="accordion-collapse-heading-2">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
      <span>Productos</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
      <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
  <table>
    <thead>
        <tr>
            <th class="mr-8 px-6 py-3">Nombre</th>
            <th class="mr-8 px-6 py-3">Precio</th>
            <th class="mr-8 px-6 py-3">Stock</th>
            <th class="px-6 py-3">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td class="mr-8 px-6 py-4">{{ $producto->nombre }}</td>
            <td class="mr-8 px-6 py-4">{{ $producto->precio }}</td>
            <td class="mr-8 px-6 py-4">{{ $producto->stock }}</td>
            <td class="px-6 py-4">
                <a href="/productos/{{ $producto->id }}/edit" class="text-blue-600 hover:text-blue-900">Editar</a>
                <form action="/productos/{{ $producto->id }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-darkorange hover:text-orange">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
  </div>
  <h2 id="accordion-collapse-heading-3">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
      <span>Blog</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
    <table>
        <thead>
            <tr>
                <th class="mr-8 px-6 py-3">Título</th>
                <th class="mr-8 px-6 py-3">Contenido</th>
                <th class="px-6 py-3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blog as $blogpost)
            <tr>
                <td class="mr-8 px-6 py-4">{{ $blogpost->titulo }}</td>
                <td class="mr-8 px-6 py-4">{{ $blogpost->contenido }}</td>
                <td class="px-6 py-4">
                    <a href="/blog/{{ $blogpost->id }}/edit" class="text-lightgreen hover:text-darkgreen">Editar</a>
                    <form action="/blog/{{ $blogpost->id }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-darkorange hover:text-orange">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>


</x-layout>