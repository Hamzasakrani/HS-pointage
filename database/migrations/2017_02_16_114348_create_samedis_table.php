<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSamedisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('samedis', function(Blueprint $table)
		{
			$table->increments('id_s');
			$table->time('s1');
			$table->time('s2');
				$table->time('s3');
			$table->time('s4');
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
		Schema::drop('samedis');
	}

}
