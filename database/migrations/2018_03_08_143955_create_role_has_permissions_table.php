<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleHasPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('role_has_permissions', function(Blueprint $table)
		{
			$table->integer('permission_id');
			$table->integer('role_id');
			$table->primary(['permission_id','role_id'], 'role_has_permissions_permission_id_role_id_primary');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('role_has_permissions');
	}

}
