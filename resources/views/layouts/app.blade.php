<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <script src="https://kit.fontawesome.com/4d3192896f.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('css')
</head>
<body>
    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            adjustMainHeight();

            // Atualize a altura do main sempre que a janela for redimensionada
            $(window).resize(function() {
                adjustMainHeight();
            });

            function adjustMainHeight() {
                var navbarHeight = $("nav").outerHeight();
                var windowHeight = $(window).height();
                var mainHeight = windowHeight - navbarHeight;
                $("main").css("height", mainHeight + "px");
            }
        });
    </script>
    @yield('js')
</body>
</html>
