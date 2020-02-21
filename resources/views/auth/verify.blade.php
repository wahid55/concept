@extends('auth.index')

@section('content')
    <div class="card-header text-center">
        <span class="splash-description"><strong>{{ __('Verify Your Email Address') }}</strong></span>
    </div>
    <div class="card-body">
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif
        <form method="POST" action="{{ route('verification.resend') }}" autocomplete="off">
            @csrf
            <p class="text-center mb-3">{{ __('Before proceeding, please check your email for a verification link. If you did not receive the email') }}</p>
            <button class="btn btn-block btn-primary" type="submit">{{ __('Click Here to Request Another') }}</button>
        </form>
    </div>
@endsection
