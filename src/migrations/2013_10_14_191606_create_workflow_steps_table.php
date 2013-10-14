<?php

use Illuminate\Database\Migrations\Migration;

class CreateWorkflowStepsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workflow_steps', function($table)
		{
		    $table->increments('id');
		    $table->string('name', 100);
		    $table->integer('step');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('workflow_steps');
	}

}