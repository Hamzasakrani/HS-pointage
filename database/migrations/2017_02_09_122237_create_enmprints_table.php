<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnmprintsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enmprints', function(Blueprint $table)
		{
			$table->increments('id_e');
			$table->string('nom');
			$table->string('prenom');
			$table->string('matricule');
			$table->integer('cv');
			$table->integer('set');
			$table->string('boutique');
			$table->string('tel');
			$table->date('datee');
			$table->string('fonction');
			$table->integer('soldeconge');
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
		Schema::drop('enmprints');
	}

}
