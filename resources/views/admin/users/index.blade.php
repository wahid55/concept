@extends('admin.index')

@section('title', 'All Users')


@section('content')
    <div class="card">
        <div class="card-body">
            @if(Session::has('message'))
                <div class="alert alert-success"><strong>{{ Session::get('message') }}</strong></div>
            @endif
            <div class="row table_filter">
                <div class="col-md-6">
                    <form class="form-inline action_form">
                        <select class="form-control form-control-sm mb-2 mr-sm-2" name="action" title="Bulk Actions" data-width="150px">
                            <option value="soft">{{ __('Move to trash') }}</option>
                            <option value="hard">{{ __('Permanently Delete') }}</option>
                        </select>
                        <button type="submit" class="btn btn-xs btn-primary mb-2">{{ __('Apply') }}</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <form action="" method="GET" class="form-inline float-md-right search_form" autocomplete="off">
                        <input type="text" class="form-control form-control-sm mb-2 mr-sm-2" name="search" placeholder="{{ __('Search') }}">
                        <button type="submit" class="btn btn-xs btn-primary mb-2">{{ __('Search') }}</button>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <form action="" method="GET" class="result_form">
                    <input type="hidden" name="action">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="40">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" class="custom-control-input checkall"><span class="custom-control-label"></span>
                                    </label>
                                </th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th class="text-center">{{ __('Role') }}</th>
                                <th class="text-center">{{ __('Posts') }}</th>
                                <th class="text-center">{{ __('Joined') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        <label class="custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="item" value="{{ $user->id }}"><span class="custom-control-label"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="media">
                                            <img src="{{ asset('backend/images/avatar.svg') }}" class="align-self-center mr-3" alt="{{ $user->name }}" width="40">
                                            <div class="media-body">
                                                <h5 class="m-0">{{ $user->name }}</h5>
                                                <p class="m-0"><a href="{{ route('users.edit', $user) }}">{{ __('Edit') }}</a> | <a href="{{ route('users.destroy', $user) }}">{{ __('Delete') }}</a> | <a href="{{ route('users.show', $user) }}" target="_blank">{{ __('View') }}</a></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                    <td class="text-center">
                                        @if($user->role->id == 1)
                                            <span class="badge badge-primary">{{ $user->role->name }}</span></td>
                                        @elseif($user->role->id == 2)
                                            <span class="badge badge-success">{{ $user->role->name }}</span></td>
                                        @elseif($user->role->id == 3)
                                            <span class="badge badge-info">{{ $user->role->name }}</span></td>
                                        @endif
                                    <td class="text-center"><a href="#">0</a></td>
                                    <td class="text-center">{{ $user->created_at->format('M d, Y') }}<br>{{ $user->created_at->format('g:i a') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection