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
    @livewireStyles
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

@auth

<main class="container mx-auto max-w-custom flex">
    <div class="w-1/3 mr-5 mt-16 text-xl font-semibold">Online now

        <div class=" h-32  mt-8 flex">

            @for ($i = 1; $i <= 5; $i++)
                <div >
                    <a href="#">
                        <img src="https://www.gravatar.com/avatar/b6bedca0eda879de96fa7b9e1cc5cc94?d=mp" alt="avatar"
                             class="w-10 h-10 rounded-full">
                    </a>
                    <a href="#">
                        <img src="https://www.gravatar.com/avatar/b6bedca0eda879de96fa7b9e1cc5cc94?d=mp" alt="avatar"
                             class="w-10 h-10 rounded-full">
                    </a>
                </div>
            @endfor
        </div>
    </div>
    <div class="w-10/12">
        <nav class="flex items-center justify-between text-xs">
            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li><a href="" class="border-b-4 pb-3 border-blue">Test (32)</a></li>
                <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Learn
                        (6)</a></li>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Pick
                        Question (1)</a></li>
            </ul>

            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Tutor
                        Comments (10)</a></li>
                <li><a href="{{url('/profile')}}" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">My
                        Profile</a></li>
            </ul>
        </nav>
    </div>


</main>
@endauth
{{ $slot }}

@livewireScripts
</body>
</html>
