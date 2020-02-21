@extends('auth.index')

@section('content')
    <div class="card-body">
        <form method="POST" action="{{ route('login') }}" autocomplete="off">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password">
                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label class="custom-control custom-checkbox">
                    <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="custom-control-label">{{ __('Remember Me') }}</span>
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Sign in') }}</button>
        </form>
    </div>
    <div class="card-footer bg-white p-0  ">
        <div class="card-footer-item card-footer-item-bordered">
            <a href="{{ route('register') }}" class="footer-link">{{ __('Create An Account') }}</a></div>
        <div class="card-footer-item card-footer-item-bordered">
            <a href="{{ route('password.request') }}" class="footer-link">{{ __('Forgot Password') }}</a>
        </div>
    </div>
@endsection
