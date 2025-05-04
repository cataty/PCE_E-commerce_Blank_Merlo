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

    <a href="/blog/todos" class="inline-flex items-center justify-center mt-12 px-5 py-3 text-base font-bold text-center bg-lightorange text-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
        Ver todos
        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a> 
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</section>