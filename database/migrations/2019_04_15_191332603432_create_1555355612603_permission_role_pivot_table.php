<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1555355612603PermissionRolePivotTable extends Migration
{
    public function up()
    {
        Schema::create('permission_role', function (Blueprint $table) {
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->unsignedInteger('permission_id');
            $table->foreign('permission_id')->references('id')->on('permissions');
        });
    }

    public function down()
    {
        Schema::dropIfExists('permission_role');
    }
}
