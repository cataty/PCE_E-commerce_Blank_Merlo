<?php
    /** @var \Illuminate\Support\ViewErrorBag $errors */
    ?>
    <x-layout>
        <x-slot:title>Crear Blogpost</x-slot:title>
        <section>
        <h1 class="max-w-2xl mb-12 pt-12 text-4xl text-lightgreen font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-whitel">Crear Blogpost</h1>

        @if ($errors->any())
            <div class="w-screen bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                <p>Tu formulario contiene errores, por favor revisa</p>

            </div>
        @endif

        <form action="{{ route('cargaDatosBlogpost') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            <div class="mb-6">
                <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título:</label>
                <input
                    type="text"
                    id="titulo"
                    name="titulo"
                    class="block w-full px-4 py-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('titulo') border-red-500 @enderror"
                    required
                    value="{{ old('titulo') }}" >
                @error('titulo')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="contenido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenido:</label>
                <textarea
                    id="contenido"
                    name="contenido"
                    rows="7"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('contenido') border-red-500 @enderror"
                    required
                >{{ old('contenido') }}</textarea> @error('contenido')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoría:</label>
                <select
                    id="categoria"
                    name="categoria"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('categoria') border-red-500 @enderror"
                    required
                >
                    <option value="">Selecciona una categoria</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->categoria_blog_id }}" {{ old('categoria') == $categoria->categoria_blog_id ? 'selected' : '' }}>{{ $categoria->nombre_categoria }}</option> @endforeach
                        <option value="otros" {{ old('categoria') == 'otros' ? 'selected' : '' }}>Otros</option> </select>
                @error('categoria')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="imagen" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen:</label>
                <input
                    type="file"
                    id="imagen"
                    name="imagen"
                    class="block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('imagen') border-red-500 @enderror"
                    accept="image/*"
                    {{-- El valor de un input file no se puede mantener por seguridad --}}
                >
                @error('imagen')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button
                    type="submit"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-3"
                >
                    Publicar
                </button>
            </div>
    </div>
</form>
</section>
</x-layout>