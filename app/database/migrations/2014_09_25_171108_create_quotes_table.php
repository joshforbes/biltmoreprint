<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quotes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('company');
			$table->string('email');
			$table->string('phone');
			$table->string('project');
			$table->integer('quantity');
			$table->string('due');
			$table->text('description');
			$table->string('files');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quotes');
	}

}
