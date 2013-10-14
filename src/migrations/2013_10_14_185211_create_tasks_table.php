<?php

use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function($table)
		{
		    $table->increments('id');
		    $table->integer('project_id');
		    $table->integer('creator_user_id');
		    $table->integer('assigned_to_user_id');
		    $table->integer('type_id');
		    $table->integer('workflow_step_id');
		    $table->string('name', 100);
		    $table->timestamps();
		    $table->softDeletes();
		    $table->dateTime('due_at');
		    $table->dateTime('hard_due_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks');
	}

}