<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;

class UsersApiController extends Controller
{
    public function index()
    {
        $users = User::all();

        return $users;
    }

    public function store(StoreUserRequest $request)
    {
        return User::create($request->all());
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        return $user->update($request->all());
    }

    public function show(User $user)
    {
        return $user;
    }

    public function destroy(User $user)
    {
        return $user->delete();
    }
}
