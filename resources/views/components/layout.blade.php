<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="css/styles.css">
{{--     @vite('resources/css/app.css')
    @yield('content') --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <link rel="icon" type="image/x-icon" href="{{url('img/favicon.svg')}}">
    <title>{{$title ?? ''}}</title>
</head>
<body>
    <div id=”app”>
    
<nav class="bg-darkorange border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap justify-between mx-auto p-4">
    <a href="/public/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('img/Logo.svg') }}" class="h-12" alt="Monstierra Logo" />
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-lightgreen dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Abrir menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:border-lightgreen">
        <li>
          <a class="block py-2 px-3 text-white bg-dark-orange rounded-sm md:bg-transparent md:text-dark-orange md:p-0 dark:text-white md:dark:text-light-green" aria-current="page" href="{{route ('home')}}">Home</a>
        </li>
        <li>
          <a class="block py-2 px-3 text-emerald-100 rounded-sm hover:bg-emerald-100 md:hover:bg-transparent md:border-0 md:hover:text-dark-orange md:p-0 dark:text-white md:dark:hover:text-lightgreen dark:hover:bg-lightgreen dark:hover:text-white md:dark:hover:bg-transparent" href="/#about">Quiénes Somos</a>
        </li>
        <li>
          <a class="block py-2 px-3 text-emerald-100 rounded-sm hover:bg-emerald-100 md:hover:bg-transparent md:border-0 md:hover:text-dark-orange md:p-0 dark:text-white md:dark:hover:text-lightgreen dark:hover:bg-lightgreen dark:hover:text-white md:dark:hover:bg-transparent" href="{{route('productos')}}">Productos</a>
        </li>
        <li>
          <a class="block py-2 px-3 text-emerald-100 rounded-sm hover:bg-emerald-100 md:hover:bg-transparent md:border-0 md:hover:text-dark-orange md:p-0 dark:text-white md:dark:hover:text-lightgreen dark:hover:bg-lightgreen dark:hover:text-white md:dark:hover:bg-transparent" href="{{route('blog')}}">Blog</a>
        </li>
        @if(auth()->check())
        <li>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="block py-2 px-3 text-emerald-100 rounded-sm hover:bg-emerald-100 md:hover:bg-transparent md:border-0 md:hover:text-dark-orange md:p-0 dark:text-white md:dark:hover:text-lightgreen dark:hover:bg-lightgreen dark:hover:text-white md:dark:hover:bg-transparent">
              {{ auth()->user()->email }} (Cerrar Sesión)
            </button>
          </form>
        </li>
        @else
        <li>
          <a class="block py-2 px-3 text-lightorange rounded-sm hover:bg-emerald-100 md:hover:bg-transparent md:border-0 md:hover:text-dark-orange md:p-0 dark:text-white md:dark:hover:text-lightgreen dark:hover:bg-lightgreen dark:hover:text-white md:dark:hover:bg-transparent" href="{{route('login')}}"'>Iniciar Sesión</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
        <main class="flex flex-wrap items-center justify-center mx-auto p-4">

        @if (session('feedback.message'))
            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4" role="alert">
                <p class="font-bold">Advertencia</p>
                <p>{{ session('feedback.message') }}</p>
            </div>
        @endif
        <main class="flex flex-wrap items-center justify-between mx-auto p-4">
        {{$slot}}
        </main>
        <footer class="footer text-lightorange bg-darkgreen text-center">
        <p>Copyright &copy; Da Vinci 2024</p>
        </footer>
        </div>
</body>

</html>