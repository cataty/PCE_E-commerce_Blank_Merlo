

<form action="{{ route('blogposts.store') }}" method="POST">
    <x-layout>
        <x-slot:title>Blog</x-slot:title>
        <h1 class="max-w-2xl mb-12 pt-12 text-4xl text-lightgreen font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-whitel">Crear Blogpost</h1>
    <div>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="{{$blogpost["nombre"]}}" required>
    </div>
    <div>
        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" rows="15" value="{{$blogpost["contenido"]}}" required></textarea>
    </div>
    <div>
        <label for="categoria">Categoría:</label>
        <select id="categoria" name="categoria" required>
            <option value="cat!">::::::</option>
            <option value="cat2">::::::</option>
            <option value="cat3">::::::</option>
            <option value="otros">Otros</option>
        </select>
    </div>
    <div>
        <img class="mb-12" src="{{ asset($blogpost['imagen'])}}" alt="{{$blogpost['nombre']}}" />
        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" name="imagen" accept="image/*">
    </div>
    <div>
        <button type="submit">Publicar</button>
    </div>
</form>
</x-layout