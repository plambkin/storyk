<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracasts Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Vue from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

</head>
<body class="font-sans bg-gray-background text-gray-900 text-sm">
<header class="flex items-center justify-between px-8 py-4">
    <a href="#"><img src="{{ asset('img/logo.svg') }}" alt="logo"></a>
    <div class="flex items-center">
        @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                            {{ __('Log out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="#">
            <img src="https://www.gravatar.com/avatar/b6bedca0eda879de96fa7b9e1cc5cc94?d=mp" alt="avatar"
                 class="w-10 h-10 rounded-full">
        </a>
    </div>
</header>

<main class="container mx-auto max-w-custom">

    <div class="flex w-full justify-between font-extrabold text-xl font-semibold md:mt-0">
        <div>Name: John Doe</div>

        <div>Yet to Mark: 17</div>
    </div>

    <div class="flex w-full justify-between mt-10">
        <div class="flex w-full">
            <h3 class="ml-6 font-extrabold mt-5 text-xl font-semibold md:mt-0"> Question</h3>
            <textarea class="ml-6 w-full hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer mt-10" name="" id="" cols="30" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aperiam consectetur culpa deleniti eius illo labore molestiae nobis omnis placeat porro quisquam ratione repudiandae sapiente similique soluta, tempore unde!</textarea>
        </div>

    </div>

    <div class="flex w-full justify-between mt-10">
        <div class="flex w-full">
            <h3 class="ml-6 font-extrabold mt-5 text-xl font-semibold"> Answer</h3>
            <textarea class="mt-10 ml-6 w-full hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer" name="" id="" cols="30" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aperiam consectetur culpa deleniti eius illo labore molestiae nobis omnis placeat porro quisquam ratione repudiandae sapiente similique soluta, tempore unde!</textarea>
        </div>

        <div class="flex w-full">
            <h3 class="ml-6 font-extrabold mt-5 text-xl font-semibold md:mt-0"> Tutor Comments</h3>
            <textarea class="mt-10 ml-6 w-full hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer" name="" id="" cols="30" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aperiam consectetur culpa deleniti eius illo labore molestiae nobis omnis placeat porro quisquam ratione repudiandae sapiente similique soluta, tempore unde!</textarea>
        </div>

    </div>

    <div class="w-full ml-5 mt-5 flex justify-between items-center">
        <div class="ml-10">
            <button
                type="button"
                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
            >

                <span class="ml-1 mr-2"> Back </span>
            </button>
        </div>
        <div class="mr-10">
            <button type="submit"
                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                <span class="ml-2 mr-2">Next</span>
            </button>

        </div>
    </div>


</main>


</body>
</html>
