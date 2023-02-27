<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPermissionRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permission_roles', function (Blueprint $table) {
            $table->foreign(['permission_id'])->references(['id'])->on('permissions')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['role_id'])->references(['id'])->on('roles')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permission_roles', function (Blueprint $table) {
            $table->dropForeign('permission_roles_permission_id_foreign');
            $table->dropForeign('permission_roles_role_id_foreign');
        });
    }
}
