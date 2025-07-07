<?php
    /** @var \Illuminate\Support\ViewErrorBag $errors */
    ?>
    <x-layout>
        <x-slot:title>Crear Blogpost</x-slot:title>
        <section>
        <h1 class="max-w-2xl mb-12 pt-12 text-4xl text-lightgreen font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-whitel">Carrito</h1>

        @if ($errors->any())
            <div class="w-screen bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                <p>Tu carrito contiene errores, por favor revisa</p>
            </div>
        @endif

        @if (isset($carrito) && $carrito->isNotEmpty())
            <div class="p-4 mb-4">
                <p>Tu carrito contiene productos.</p>
                <form action="" method="POST" >
                @foreach ($carrito as $producto)
                @endforeach
                <button type="submit"> Finalizar Compra </button>
                </form>
            </div>
        @else 
            <div class="text-darkgreen p-4 mb-4" role="alert">
                <p>Tu carrito está vacío.</p>
            </div>
        @endif
</section>
</x-layout>
