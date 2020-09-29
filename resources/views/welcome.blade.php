<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="gem-front-body-bg-color">
    <x-header-menu >Header Menu</x-header-menu>
    <x-slider-component is-start-up="false" >Slider Area</x-slider-component>
    <x-props-component></x-props-component>
    <x-attributes-component></x-attributes-component>
    <x-tabs-component></x-tabs-component>
                @auth
                <div id="app">
                    <App> </App>

                </div>
                @else
                <div id="app">
                </div>

                @endauth
                <!--
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
  <x-jum-botron-component></x-jum-botron-component>
    <x-footer-menu />
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</html>
