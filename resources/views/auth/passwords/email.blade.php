@extends('auth.index')

@section('content')
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" autocomplete="off">
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group pt-2 mb-0">
                <button class="btn btn-block btn-primary" type="submit">{{ __('Send Password Reset Link') }}</button>
            </div>
        </form>
    </div>
    <div class="card-footer bg-white text-center">
        <p>{{ __('Already have password?') }} <a href="{{ route('login') }}" class="text-secondary">{{ __('Login Here.') }}</a></p>
    </div>
@endsection
