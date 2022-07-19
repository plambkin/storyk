<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Story Scaff') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans text-gray-900 text-sm">
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
            <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar"
                 class="w-10 h-10 rounded-full">
        </a>
    </div>
</header>
@auth


    <main class="container flex justify-between items-center text-xl mr-12 ml-12">


        <div>
            <ul>
                <li><a href="{{ route('test') }}" class="border-b-4 pb-3 border-blue">Test (32)</a></li>
            </ul>
        </div>
        <div>
            <ul>
                <li><a href="{{ route('learn') }}"
                       class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Learn
                        (6)</a></li>
            </ul>
        </div>

        <div>
            <ul>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Pick
                        Question (1)</a></li>
            </ul>
        </div>

        <div>
            <ul>
                <li><a href="{{ route('tutor-comments') }}"
                       class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Tutor
                        Comments (10)</a></li>
            </ul>
        </div>

        <div>
            <ul>
                <li><a href="{{ route('profile') }}"
                       class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">My
                        Profile</a></li>
            </ul>
        </div>
    </main>

    <main class="container flex justify-between justify-center mt-10">

        <div></div>
        <div class="font-semibold text-xl">Online now</div>
        <div></div>
    </main>

    <main class="container flex mt-5 m-10">

        <div></div>
        <div><a href="#">
                <img src="https://www.gravatar.com/avatar/b6bedca0eda879de96fa7b9e1cc5cc94?d=mp" alt="avatar"
                     class="w-10 h-10 rounded-full">
            </a></div>
        <div><a href="#">
                <img src="https://www.gravatar.com/avatar/b6bedca0eda879de96fa7b9e1cc5cc94?d=mp" alt="avatar"
                     class="w-10 h-10 rounded-full">
            </a></div>
        <div><a href="#">
                <img src="https://www.gravatar.com/avatar/b6bedca0eda879de96fa7b9e1cc5cc94?d=mp" alt="avatar"
                     class="w-10 h-10 rounded-full">
            </a></div>
        <div><a href="#">
                <img src="https://www.gravatar.com/avatar/b6bedca0eda879de96fa7b9e1cc5cc94?d=mp" alt="avatar"
                     class="w-10 h-10 rounded-full">
            </a></div>
        <div><a href="#">
                <img src="https://www.gravatar.com/avatar/b6bedca0eda879de96fa7b9e1cc5cc94?d=mp" alt="avatar"
                     class="w-10 h-10 rounded-full">
            </a></div>
        <div><a href="#">
                <img src="https://www.gravatar.com/avatar/b6bedca0eda879de96fa7b9e1cc5cc94?d=mp" alt="avatar"
                     class="w-10 h-10 rounded-full">
            </a></div>
    </main>



@endauth
</body>
</html>
