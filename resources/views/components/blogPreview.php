<section class="preview w-screen bg-white flex flex-col items-center justify-center pb-12">
    <h2 class="my-16 text-4xl text-lightgreen font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Blogposts recientes</h2>
    <div class ="flex flex-wrap justify-center gap-4">

    <?php
        foreach ($blogpostsRecientes as $blogpost):
    ?>


        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('blogpost', ['id' => $blogpost->blogpost_id]) }}">
                <img class="rounded-t-lg" src="{{ $blogpost->imagen }}" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('blogpost', ['id' => $blogpost->blogpost_id]) }}">
                    <h3 class="mb-2 text-2xl font-bold tracking-tight text-darkgreen dark:text-white">{{ $blogpost->nombre }}</h3>
                </a>
                <a href="{{ route('blogpost', ['id' => $blogpost->blogpost_id]) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Leer articulo
                </a>
            </div>
        </div>
    <?php
    endforeach;
    ?>
    </div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</section>