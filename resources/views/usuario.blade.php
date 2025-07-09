<?php
/** @var \Illuminate\Database\Eloquent\Collection\App\Models\Producto::find($id)->toArray() $producto */
?>

<x-layout>
<x-slot:title>Usuario: {{ $usuario->name }}</x-slot:title>
<section class="flex flex-col items-center">
<h1 class="max-w-2xl mb-12 pt-12 text-4xl text-lightgreen font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Usuario: {{ $usuario->name }} </h1>
<div class="my-6 w-full shadow-md rounded px-8 py-6 bg-white dark:bg-gray-800">
    <h2 class="mb-2 text-2xl font-bold tracking-tight text-darkgreen dark:text-white">Datos del usuario</h2>
    <p>Nombre: {{ $usuario->name }}</p>
    <p>Email: {{ $usuario->email }}</p>
</div>
<div class="my-6 w-full shadow-md rounded px-8 py-6 bg-white dark:bg-gray-800">
    <h2 class="mb-2 text-2xl font-bold tracking-tight text-darkgreen dark:text-white">Ordenes</h2>
    @if($usuario->ordenes->isEmpty())
        <p>No hay ordenes para mostrar.</p>
    @else
        <ul>
            @foreach($usuario->ordenes as $orden)
                <li>
                    <h3 class="text-lg font-bold">Orden #{{ $orden->id }} <span class="text-sm font-normal font-montserrat"> {{ $orden->updated_at }} </span></h3>
                    <ul class="my-2">
                        @foreach($orden->ordenItems as $item)
                            <li clas="mb-2">
                                <h4 class="font-semibold">Producto: {{ $item->producto->nombre }}</h4> 
                                <p class="font-montserrat">Cantidad: {{ $item->cantidad }} - Precio: ${{ $item->producto->precio }}</p>
                            </li>
                        @endforeach
                    </ul>
                    <p class="font-bold">Total: ${{ $orden->total }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</div>

<button class="mt-8 px-4 py-2 bg-orange text-white rounded-lg hover:bg-darkorange focus:outline-none focus:ring-2 focus:ring-darkorange">
    <a href="{{ route('dashboard') }}">Volver al Dashboard</a>

</section>
     
</x-layout>
