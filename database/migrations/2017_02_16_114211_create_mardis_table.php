<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMardisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mardis', function(Blueprint $table)
		{
			$table->increments('id_m');
			$table->time('m1');
			$table->time('m2');
				$table->time('m3');
			$table->time('m4');
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
		Schema::drop('mardis');
	}

}
