<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Vue-i18n</title>
    </head>
    <body class="antialiased">
        <div id="app">
            @yield('content')
        </div>
    </body>
<script src="/js/app.js"></script>
</html>
