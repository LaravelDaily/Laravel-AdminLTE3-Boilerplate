<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPermissionRequest;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Permission;

class PermissionsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        $permissions = Permission::all();

        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('permission_create'), 403);

        return view('admin.permissions.create');
    }

    public function store(StorePermissionRequest $request)
    {
        abort_unless(\Gate::allows('permission_create'), 403);

        $permission = Permission::create($request->all());

        return redirect()->route('admin.permissions.index');
    }

    public function edit(Permission $permission)
    {
        abort_unless(\Gate::allows('permission_edit'), 403);

        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        abort_unless(\Gate::allows('permission_edit'), 403);

        $permission->update($request->all());

        return redirect()->route('admin.permissions.index');
    }

    public function show(Permission $permission)
    {
        abort_unless(\Gate::allows('permission_show'), 403);

        return view('admin.permissions.show', compact('permission'));
    }

    public function destroy(Permission $permission)
    {
        abort_unless(\Gate::allows('permission_delete'), 403);

        $permission->delete();

        return back();
    }

    public function massDestroy(MassDestroyPermissionRequest $request)
    {
        Permission::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
