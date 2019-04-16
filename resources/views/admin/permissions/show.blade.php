@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.permission.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.permission.fields.title') }}
                    </th>
                    <td>
                        {{ $permission->title }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection