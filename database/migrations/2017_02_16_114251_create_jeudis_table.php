<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJeudisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('jeudis', function(Blueprint $table)
		{
			$table->increments('id_j');
			$table->time('j1');
			$table->time('j2');
				$table->time('j3');
			$table->time('j4');
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
		Schema::drop('jeudis');
	}


}
