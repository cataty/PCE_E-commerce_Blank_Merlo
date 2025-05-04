<section class="preview w-screen bg-white flex flex-col items-center justify-center pb-12">
    <h2 class="my-16 text-4xl text-lightgreen font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Blogposts recientes</h2>
    <div class ="flex flex-wrap justify-center gap-4">
    <?php

        foreach ($blogpostsRecientes as $blogpost):
    ?>
        <!-- Card de cada blogpost -->

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
               <a href="{{ route('blogpost', ['id' => $blogpost->id]) }}">
                <img class="rounded-t-lg" src="{{ $blogpost->imagen }}" alt="{{ $blogpost->titulo }}" />
            </a>
            <div class="p-5">
                   <a href="{{ route('blogpost', ['id' => $blogpost->id]) }}">
                    <h3 class="mb-2 text-2xl font-bold tracking-tight text-darkgreen dark:text-white">{{ $blogpost->titulo }}</h3>
                </a>
                <a href="{{ route('blogpost', ['id' => $blogpost->id]) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Ver más
                </a>
            </div>
        </div>

    <?php
    endforeach;
    ?>
    </div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</section>