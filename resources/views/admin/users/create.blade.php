@extends('admin.index')

@section('title', 'Add New User')


@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST" autocomplete="off">
                @csrf
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-lg-2 col-form-label" for="name">{{ __('Name') }}</label>
                    <div class="col-12 col-sm-8 col-lg-5">
                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-lg-2 col-form-label" for="email">{{ __('Email') }}</label>
                    <div class="col-12 col-sm-8 col-lg-5">
                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-lg-2 col-form-label" for="password">{{ __('Password') }}</label>
                    <div class="col-12 col-sm-8 col-lg-5">
                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-lg-2 col-form-label" for="role_id">{{ __('Role') }}</label>
                    <div class="col-12 col-sm-8 col-lg-5">
                        <select name="role_id" id="role_id" data-width="100%">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-lg-2 col-form-label" for="notification">{{ __('Notification') }}</label>
                    <div class="col-12 col-sm-8 col-lg-5">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="notification" value="yes" id="notification" class="custom-control-input"><span class="custom-control-label">Send the new user an email about their account.</span>
                        </label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col offset-lg-2 offset-sm-3">
                        <button type="submit" class="btn btn-sm btn-space btn-primary">{{ __('Add Now') }}</button>
                        <a href="#" class="btn btn-space btn-sm btn-secondary">{{ __('Cancel') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection