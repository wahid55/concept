<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Concept')</title>

        <!-- Bootstrap CSS -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/vendor/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/vendor/fonts/roboto/fonts.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/libs/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('backend/vendor/fonts/fontawesome/css/all.min.css') }}" rel="stylesheet">
        @yield('header')
    </head>

    <body>
        <div class="dashboard-main-wrapper">
            <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <a class="navbar-brand" href="{{ route('dashboard') }}"><img src="{{ asset('backend/images/logo.png') }}" alt="{{ __('Concept') }}"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right-top">
                            <li class="nav-item">
                                <div id="custom-search" class="top-search-bar">
                                    <input class="form-control" type="text" placeholder="Search..">
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-fw fa-globe"></i></a>
                            </li>
                            <li class="nav-item dropdown nav-user">
                                <a class="nav-link nav-user-img" href="#"data-toggle="dropdown"><img src="{{ asset('backend/images/avatar.svg') }}" alt="{{ Auth::user()->name }}" class="user-avatar-md rounded-circle"></a>
                                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown">
                                    <div class="nav-user-info">
                                        <h5 class="mb-0 text-white nav-user-name">{{ Auth::user()->name }}</h5>
                                    </div>
                                    <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>{{ __('Profile') }}</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>{{ __('Logout') }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="nav-left-sidebar sidebar-dark">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> {{ __('Dashboard') }}</a>
                            </li>
                            <li class="nav-item has-indicator">
                                <a class="nav-link" href="#"><i class="fas fa-newspaper"></i> {{ __('Posts') }}</a>
                                <ul>
                                    <li><a href="#">{{ __('All Posts') }}</a></li>
                                    <li><a href="#">{{ __('Add New') }}</a></li>
                                    <li><a href="#">{{ __('Categories') }}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item has-indicator">
                                <a class="nav-link" href="#"><i class="fas fa-file"></i> {{ __('Pages') }}</a>
                                <ul>
                                    <li><a href="#">{{ __('All Pages') }}</a></li>
                                    <li><a href="#">{{ __('Add New') }}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item has-indicator">
                                <a class="nav-link" href="#"><i class="fas fa-photo-video"></i> {{ __('Media') }}</a>
                                <ul>
                                    <li><a href="#">{{ __('Library') }}</a></li>
                                    <li><a href="#">{{ __('Add New') }}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-comments"></i> {{ __('Comments') }}</a>
                            </li>
                            <li class="nav-item has-indicator">
                                <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-users"></i> {{ __('Users') }}</a>
                                <ul>
                                    <li><a href="{{ route('users.index') }}">{{ __('All Users') }}</a></li>
                                    <li><a href="{{ route('users.create') }}">{{ __('Add New') }}</a></li>
                                    <li><a href="{{ route('users.edit', Auth::user()) }}">{{ __('Your Profile') }}</a></li>
                                </ul>
                            </li>
                            <li class="nav-item has-indicator">
                                <a class="nav-link" href="#"><i class="fas fa-cogs"></i> {{ __('Settings') }}</a>
                                <ul>
                                    <li><a href="#">{{ __('General') }}</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="dashboard-wrapper">
                <div class="container-fluid dashboard-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">@yield('title', 'Page Title')</h2>
                                @if(request()->route()->getName() == 'dashboard')
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Settings</a></li>
                                                <li class="breadcrumb-item active">Settings</li>
                                            </ol>
                                        </nav>
                                    </div>
                                @endif
                            </div>

                            @yield('content')

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <p>{{ __('Copyright') }} <i class="far fa-copyright"></i> {{ now()->year . __('. All rights reserved.') }}</p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="text-md-right">
                            <p>{{ __('Developed by') }} <a href="{{ url('http://mohammadwahid.com/') }}" class="text-dark" target="_blank">{{ __('Mohammad Wahid') }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="{{ asset('backend/vendor/jquery/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('backend/libs/js/main-js.js') }}"></script>
        @yield('footer')
    </body>
</html>