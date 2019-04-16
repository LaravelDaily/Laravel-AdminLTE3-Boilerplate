@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.role.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.role.fields.title') }}
                    </th>
                    <td>
                        {{ $role->title }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Permissions
                    </th>
                    <td>
                        @foreach($role->permissions as $id => $permissions)
                            <span class="label label-info label-many">{{ $permissions->title }}</span>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection