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


<!-- This is an example component -->

<div class="h-full">

    <div class="border-b-2 block md:flex">

        <div class="w-full md:w-2/5 p-4 sm:p-6 lg:p-8 bg-white shadow-md">
            <div class="flex justify-between">
                <span class="text-xl font-semibold block">Admin Profile</span>
                <a href="#"
                   class="-mt-2 text-md font-bold text-white bg-gray-700 rounded-full px-5 py-2 hover:bg-gray-800">Edit</a>
            </div>

            <span class="text-gray-600">This information is secret so be careful</span>
            <div class="w-full p-8 mx-2 flex justify-center">
                <img src="https://www.gravatar.com/avatar/b6bedca0eda879de96fa7b9e1cc5cc94?d=mp" alt="avatar"
                     class="w-20 h-20 rounded-full"></div>
        </div>

        <div class="w-full md:w-3/5 p-8 bg-white lg:ml-4 shadow-md">
            <div class="rounded  shadow p-6">
                <div class="pb-6">
                    <label for="name" class="font-semibold text-gray-700 block pb-1">Name</label>
                    <div class="flex">
                        <input disabled id="username" class="border-1  rounded-r px-4 py-2 w-full" type="text"
                               value="Jane Name"/>
                    </div>
                </div>
                <div class="pb-4">
                    <label for="about" class="font-semibold text-gray-700 block pb-1">Email</label>
                    <input disabled id="email" class="border-1  rounded-r px-4 py-2 w-full" type="email"
                           value="example@example.com"/>
                    <span
                        class="text-gray-600 pt-4 block opacity-70">Personal login information of your account</span>
                </div>

                <div>
                    <a href="{{ url('/') }}"
                       class="-mt-2 text-md font-bold text-white bg-gray-700 rounded-full px-5 py-2 hover:bg-gray-800">Back</a>
                </div>
            </div>
        </div>

    </div>

</div>
</body>

</html>


