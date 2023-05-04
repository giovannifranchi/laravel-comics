<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        @include('partials.header')
        <main class="main-info">
            @include('partials.jumbotron')
            <div class="thumb">
                @yield('thumb')
            </div>
            <div class="container">
                @yield('info')
            </div>
            @yield('detail')
        </main>
        @include('partials.footer')
    </body>
</html>