

<form action="{{ route('blogposts.store') }}" method="POST">
    <x-layout>
        <x-slot:title>Blog</x-slot:title>
        <h1 class="max-w-2xl mb-12 pt-12 text-4xl text-lightgreen font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-whitel">Crear Blogpost</h1>
        @csrf
        <div>
            <div class="mb-6">
                <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título:</label>
                <input type="text" id="titulo" name="titulo" value="{{$blogpost["nombre"]}}"  class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="contenido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenido:</label>
                <textarea id="contenido" name="contenido" rows="15" value="{{$blogpost["contenido"]}}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required></textarea>
            </div>
            <div class="mb-6">
                <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoría:</label>
                <select id="categoria" name="categoria" value="{{$blogpost["categoria"]}}" class="p-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    <option value="cat!">::::::</option>
                    <option value="cat2">::::::</option>
                    <option value="cat3">::::::</option>
                    <option value="otros">Otros</option>
                </select>
            </div>
            <div class="mb-6">
                <img class="mb-12" src="{{ asset($blogpost['imagen'])}}" alt="{{$blogpost['nombre']}}" />
                <label for="imagen" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen:</label>
                <input type="file" id="imagen" name="imagen" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" accept="image/*">
            </div>
            <div>
                <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-3">Publicar</button>
            </div>
    </div>
</form>
</x-layout