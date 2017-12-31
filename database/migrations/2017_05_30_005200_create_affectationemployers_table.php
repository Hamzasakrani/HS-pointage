<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffectationemployersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('affectationemployers', function(Blueprint $table)
		{
			$table->Increments('id_affemp');
			$table->string('nom');
			$table->string('prenom');
			$table->string('matricule');
			$table->string('boutique');
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
		Schema::drop('affectationemployers');
	}

}
