<?php

use App\Http\Controllers\Api\V1\Admin\PermissionsApiController;
use App\Http\Controllers\Api\V1\Admin\ProductsApiController;
use App\Http\Controllers\Api\V1\Admin\RolesApiController;
use App\Http\Controllers\Api\V1\Admin\UsersApiController;

Route::group(['prefix' => 'v1', 'as' => 'admin.'], function () {
    Route::apiResource('permissions', PermissionsApiController::class);

    Route::apiResource('roles', RolesApiController::class);

    Route::apiResource('users', UsersApiController::class);

    Route::apiResource('products', ProductsApiController::class);
});
