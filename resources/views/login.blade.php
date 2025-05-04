<x-layout>
    <x-slot:title>Iniciar Sesión</x-slot:title>

        
    <div class="flex flex-col items-center justify-center min-h-screen">
        <h1 class="block text-gray-700 text-2xl font-bold mb-6 text-center">Iniciar Sesión</h1>
        
        <form action="{{ route('login') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email:</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="email"
                    id="email"
                    name="email"
                    required
                >
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Contraseña:</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    type="password"
                    id="password"
                    name="password"
                    required
                >
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-lightgreen text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit"
                >
                    Iniciar Sesión
                </button>
            </div>
        </form>
    </div>
    </div>
</x-layout>