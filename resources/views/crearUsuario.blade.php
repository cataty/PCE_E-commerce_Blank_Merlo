<?php
    /** @var \Illuminate\Support\ViewErrorBag $errors */
    ?>
    <x-layout>
        <x-slot:title>Registrar Usuario</x-slot:title>
        <section>
        <h1 class="max-w-2xl mb-12 pt-12 text-4xl text-lightgreen font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-whitel">Crear Blogpost</h1>

        @if ($errors->any())
            <div class="w-screen bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                <p>Tu formulario contiene errores, por favor revisa</p>

            </div>
        @endif

        <form action="{{ route('cargaDatosUsuario') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            <div class="mb-6">
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre:</label>
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    class="block w-full px-4 py-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('nombre') border-red-500 @enderror"
                    required
                    value="{{ old('nombre') }}" >
                @error('nombre')
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
                <label for="password" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen:</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('password') border-red-500 @enderror"
                    required
                >
                @error('password')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
                        <div class="mb-6">
                <label for="password_confirmation" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen:</label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    class="block w-full px-4 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('password_confirmation') border-red-500 @enderror"
                    required
                >
                @error('password_confirmation')
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