<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<div class="p-3 text-bg-dark" style="display: block">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="20" height="32" role="img"><img src="../img/header64.png" alt=""></svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-secondary">Головна</a></li>
                <li><a href="{{ route('news.index') }}" class="nav-link px-2 text-white">IT статті</a></li>
                @if(!auth()->user())
                    <li><a href="{{ route('login') }}" class="nav-link px-2 text-white">Відеокурси</a></li>
                    <li><a href="{{ route('login') }}" class="nav-link px-2 text-white">Тести та практика</a></li>
                @else
                    <li><a href="{{ route('courses.index') }}" class="nav-link px-2 text-white">Відеокурси</a></li>
                    <li><a href="{{ route('tests.index') }}" class="nav-link px-2 text-white">Тести та практика</a></li>
                @endif
                {{--<li><a href="{{ route('intensive.index') }}" class="nav-link px-2 text-white">Програми навчання</a></li>--}}
            </ul>

            <form class="d-flex mt-3 mt-lg-0" role="search" method="get" action="@yield('searchRoute')">
                <input class="form-control me-2" type="search" placeholder="Пошук" aria-label="Search" name="s">
                <button class="btn btn-dark" type="submit">Знайти</button>
            </form>
            <div class="text-end">
                @if(!auth()->user())
                    <a href="{{route('login')}}">
                        <button type="button" class="btn btn-outline-light me-2">Увійти</button>
                    </a>
                    <a href="{{route('register')}}">
                        <button type="button" class="btn btn-warning">Реєстрація</button>
                    </a>
                @endif
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @switch(Auth::user()->role)
                                    @case(1)
                                        <a class="dropdown-item" href="{{ route('personal.index') }}">
                                            Панель користувача
                                        </a>
                                        @break(Auth::user())
                                    @case(0)
                                        <a class="dropdown-item" href="{{ route('admin.index') }}">
                                            Адмін панель
                                        </a>
                                        @break(Auth::user())
                                @endswitch
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Вийти') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</div>
