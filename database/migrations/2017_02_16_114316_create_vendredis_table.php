<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendredisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('vendredis', function(Blueprint $table)
		{
			$table->increments('id_v');
			$table->time('v1');
			$table->time('v2');
				$table->time('v3');
			$table->time('v4');
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
		Schema::drop('vendredis');
	}

}
