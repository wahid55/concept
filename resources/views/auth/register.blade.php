@extends('auth.index')

@section('content')
    <div class="card-header text-center">
        <a href="{{ url('/') }}"><img class="logo-img" src="{{ asset('admin/images/logo.png') }}" alt="{{ config('app.name', 'Concept') }}"></a>
        <span class="splash-description">{{ __('Please enter your user information.') }}</span>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}" autocomplete="off">
            @csrf
            <div class="form-group">
                <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}">
                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="{{ __('Confirm Password') }}">
            </div>
            <div class="form-group pt-2 mb-0">
                <button class="btn btn-block btn-primary" type="submit">{{ __('Register My Account') }}</button>
            </div>
        </form>
    </div>
    <div class="card-footer bg-white text-center">
        <p>{{ __('Already member?') }} <a href="{{ route('login') }}" class="text-secondary">{{ __('Login Here.') }}</a></p>
    </div>
@endsection
