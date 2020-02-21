@extends('auth.index')

@section('content')
    <div class="card-header text-center">
        <a href="{{ url('/') }}"><img class="logo-img" src="{{ asset('backend/images/logo.png') }}" alt="{{ config('app.name', 'Concept') }}"></a>
        <span class="splash-description">{{ __('Please confirm your password before continuing.') }}</span>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('password.confirm') }}" autocomplete="off">
            @csrf
            <div class="form-group">
                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password">
                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group pt-2 mb-0">
                <button class="btn btn-block btn-primary" type="submit">{{ __('Confirm Password') }}</button>
            </div>
        </form>
    </div>
    <div class="card-footer bg-white text-center">
        <p>{{ __('Forgot Your Password?') }} <a href="{{ route('password.request') }}" class="text-secondary">{{ __('Click Here.') }}</a></p>
    </div>
@endsection
