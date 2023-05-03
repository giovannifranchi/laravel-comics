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
        <main>
            @include('partials.jumbotron')
            <div class="container">
                @include('partials.current_title')
                @yield('main')
            </div>
        </main>
        @include('partials.action')
        @include('partials.footer')
    </body>
</html>