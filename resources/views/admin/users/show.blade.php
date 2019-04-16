@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.user.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.user.fields.name') }}
                    </th>
                    <td>
                        {{ $user->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.user.fields.email') }}
                    </th>
                    <td>
                        {{ $user->email }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.user.fields.email_verified_at') }}
                    </th>
                    <td>
                        {{ $user->email_verified_at }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Roles
                    </th>
                    <td>
                        @foreach($user->roles as $id => $roles)
                            <span class="label label-info label-many">{{ $roles->title }}</span>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection