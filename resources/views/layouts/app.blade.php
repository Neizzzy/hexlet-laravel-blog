<!doctype html>
<html lang="{{ str_replace('_', '-', $app->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Hexlet Blog - @yield('title')</title>
</head>
<body>
    <header class="py-4 bg-neutral-900">
        <nav class="max-w-7xl mx-auto">
            <div class="flex gap-10 items-center">
                <a class="text-2xl font-bold color text-rose-500 hover:scale-102 duration-300" href="{{ route('home') }}">Hexlet Blog</a>
                <div>
                    <ul class="flex gap-4">
                        <li>
                            <a class="text-white hover:text-rose-500 transition duration-300" href="{{ route('about') }}">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white hover:text-rose-500 transition duration-300" href="{{ route('articles.index') }}">Статьи</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-b-lg bg-green-50" role="alert">
            <div class="max-w-7xl mx-auto">
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    <div class="max-w-7xl mx-auto mt-4">
        <h1 class="text-4xl font-bold text-gray-900">@yield('header')</h1>
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>
