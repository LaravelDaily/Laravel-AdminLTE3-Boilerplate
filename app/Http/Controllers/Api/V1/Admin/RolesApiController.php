<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Role;

class RolesApiController extends Controller
{
    public function index()
    {
        $roles = Role::all();

        return $roles;
    }

    public function store(StoreRoleRequest $request)
    {
        return Role::create($request->all());
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        return $role->update($request->all());
    }

    public function show(Role $role)
    {
        return $role;
    }

    public function destroy(Role $role)
    {
        return $role->delete();
    }
}
