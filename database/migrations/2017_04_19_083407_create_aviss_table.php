<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvissTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aviss', function(Blueprint $table)
		{
			$table->Increments('id_a');
			$table->string('emeteur');
			$table->string('respteur');
			$table->string('profil');
			$table->string('theme');
			$table->string('commantaire');
			$table->string('conserne');
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
		Schema::drop('aviss');
	}

}
