<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSousmenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sousmenus', function(Blueprint $table)
		{
			$table->Increments('id_m');
			$table->string('libiler');
			$table->string('droits');
			$table->string('ind');
			$table->string('url');
			$table->integer('id_menu');
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
		Schema::drop('sousmenus');
	}

}
