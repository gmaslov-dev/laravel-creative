<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @vite(['resources/js/app.js'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hexlet Blog - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
</head>
<body>
<head>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Blog</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('main') ? 'disabled' : ''}}" aria-current="page" href="{{ route('main') }}">Main</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('post.index') ? 'disabled' : ''}}" href="{{ route('post.index') }}">Posts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('post.store') ? 'disabled' : ''}}" href="{{ route('post.create') }}">Create</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('about') ? 'disabled' : ''}}" href="{{ route('about') }}">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</head>
<div class="container">
    <h1 class="h1">@yield('head')</h1>
</div>
<div class="container mt-4">
    <div>
        @yield('content')
    </div>
</div>
</body>
</html>
