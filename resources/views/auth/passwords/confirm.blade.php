@extends('auth.index')

@section('content')
    <div class="card-body">
        <p class="mb-3 text-center text-secondary">{{ __('Please confirm your password before continuing.') }}</p>
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
