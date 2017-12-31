<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimanchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
	Schema::create('dimanches', function(Blueprint $table)
		{
			$table->increments('id_d');
			$table->time('d1');
			$table->time('d2');
				$table->time('d3');
			$table->time('d4');
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
		Schema::drop('dimanches');
	}

}
