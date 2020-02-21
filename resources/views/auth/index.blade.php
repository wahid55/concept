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
        <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/libs/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('admin/vendor/fonts/fontawesome/css/all.min.css') }}" rel="stylesheet">

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
                <div class="card-header text-center">
                    <a href="{{ url('/') }}"><img class="logo-img" src="{{ asset('admin/images/logo.png') }}" alt="{{ config('app.name', 'Concept') }}"></a>
                    <span class="splash-description">{{ __('Please enter your user information.') }}</span>
                </div>
                @yield('content')
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- end login page  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <script src="{{ asset('admin/vendor/jquery/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
