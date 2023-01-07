<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <meta name="description" content="">
            <meta name="author" content="">

            <title>Farmeeds</title>

            <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

            <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">

            <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        </head>
    <body id="section_1">
        @include('layouts.navbar')
        
        @yield('container')

        @include('layouts.footer')

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('assets/js/click-scroll.js') }}"></script>
        <script src="{{ asset('assets/js/counter.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>
</html>