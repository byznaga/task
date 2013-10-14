<?php

use Illuminate\Database\Migrations\Migration;

class CreateTaskTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_types', function($table)
		{
		    $table->increments('id');
		    $table->string('name', 100);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('task_types');
	}

}