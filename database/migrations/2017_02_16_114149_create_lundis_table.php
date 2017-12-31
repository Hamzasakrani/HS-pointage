<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLundisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lundis', function(Blueprint $table)
		{
			$table->increments('id_l');
			$table->time('l1');
			$table->time('l2');
				$table->time('l3');
			$table->time('l4');
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
		Schema::drop('lundis');
	}

}
