@extends('admin.index')

@section('title', 'Edit User')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('users.update', $user) }}" method="POST" autocomplete="off">
                @csrf
                @method('PATCH')

                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-lg-2 col-form-label" for="name">{{ __('Name') }}</label>
                    <div class="col-12 col-sm-8 col-lg-5">
                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-lg-2 col-form-label" for="email">{{ __('Email') }}</label>
                    <div class="col-12 col-sm-8 col-lg-5">
                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}">
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
                                <option value="{{ $role->id }}" {{ ($role->id == $user->role->id) ? 'selected' : '' }}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label class="col-12 col-sm-3 col-lg-2 col-form-label" for="photo">{{ __('Photo') }}</label>
                    <div class="col-12 col-sm-8 col-lg-5">
                        <img src="{{ asset('backend/images/picture.svg') }}" class="img-fluid mr-3" alt="{{ __('User') }}" width="100">
                        <button class="btn btn-light btn-sm">Remove</button>
                        <button class="btn btn-light d-none btn-sm">Upload Now</button>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col offset-lg-2 offset-sm-3">
                        <button type="submit" class="btn btn-sm btn-space btn-primary">{{ __('Update') }}</button>
                        <a href="{{ route('users.index') }}" class="btn btn-space btn-sm btn-secondary">{{ __('Cancel') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection