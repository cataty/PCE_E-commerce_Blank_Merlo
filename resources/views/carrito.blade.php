<?php
    /** @var \Illuminate\Support\ViewErrorBag $errors */
    ?>
    <x-layout>
    <x-slot:title>Mi Carrito</x-slot:title>

    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Mi Carrito</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if($items->isEmpty())
            <p class="text-gray-700">Tu carrito está vacío.</p>
        @else
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr>
                        <th class="border-b p-2">Producto</th>
                        <th class="border-b p-2">Precio</th>
                        <th class="border-b p-2">Cantidad</th>
                        <th class="border-b p-2">Total</th>
                        <th class="border-b p-2">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach($items as $item)
                        @php
                            $subtotal = $item->cantidad * $item->producto->precio;
                            $total += $subtotal;
                        @endphp
                        <tr>
                            <td class="border-b p-2">{{ $item->producto->nombre }}</td>
                            <td class="border-b p-2">${{ $item->producto->precio }}</td>
                            <td class="border-b p-2">{{ $item->cantidad }}</td>
                            <td class="border-b p-2">${{ $subtotal }}</td>
                            <td class="border-b p-2">
                                <form action="{{ route('carrito.eliminar', $item->id) }}" method="POST" onsubmit="return confirm('¿Eliminar este producto del carrito?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-right mt-6">
                <p class="text-xl font-bold">Total: ${{ $total }}</p>
            </div>
            <form action="{{ route('carrito.vaciar') }}" method="POST" onsubmit="return confirm('¿Estás segur@ de que querés vaciar el carrito?')">
                @csrf
                
                <button type="submit" class="text-red-600 hover:underline font-semibold mt-4">Vaciar carrito</button>
            </form>
           
        @endif

         
    </div>
</x-layout>

