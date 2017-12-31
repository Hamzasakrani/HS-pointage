<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMercredisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mercredis', function(Blueprint $table)
		{
			$table->increments('id_me');
			$table->time('me1');
			$table->time('me2');
				$table->time('me3');
			$table->time('me4');
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
		Schema::drop('mercredis');
	}

}
