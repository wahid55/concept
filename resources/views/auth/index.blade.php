<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Concept') }}</title>
        <!-- Bootstrap CSS -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/vendor/fonts/roboto/fonts.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/libs/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/vendor/fonts/fontawesome/css/all.min.css') }}" rel="stylesheet">

        <style>
            html,
            body {
                height: 100%;
            }

            body {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                padding-top: 40px;
                padding-bottom: 40px;
            }
        </style>
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- login page  -->
        <!-- ============================================================== -->
        <div class="splash-container">
            <div class="card ">
                @yield('content')
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- end login page  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <script src="{{ asset('backend/vendor/jquery/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
