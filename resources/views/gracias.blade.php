<x-layout>
        <x-slot:title>Gracias por tu compra</x-slot:title>
        <section>
        <h1 class="max-w-2xl mb-12 pt-12 text-4xl text-lightgreen font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-whitel">Gracias por tu compra!</h1>
            <div class="text-darkgreen p-4 mb-4 flex items-center flex-wrap" role="alert">
                <p class="basis-full">Tus monstruitos ya están en camino hacia vos.</p>
                <a href="{{ route('home') }}" class="mt-8 px-4 py-2 bg-orange text-white rounded-lg hover:bg-darkorange focus:outline-none focus:ring-2 focus:ring-darkorange">
                        Volver al inicio
                </a>
            </div>
</section>
</x-layout>

