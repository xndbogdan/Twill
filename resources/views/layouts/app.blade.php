<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- General -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MagnaPharm - @yield('title')</title>
    <!-- SEO -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    @yield('seo')
    <!-- Fonts -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extra.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.partials.nav')
    <div id="app">
        @yield('content')
    </div>
    @yield('scripts')
</body>
</html>
