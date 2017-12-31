<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('utilisateurs', function(Blueprint $table)
		{
			$table->Increments('id_u');
			$table->string('matricule');
			$table->string('email');
			$table->string('mdp');
			$table->string('profil');
			$table->string('ajouterpar');
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
		Schema::drop('utilisateurs');
	}

}
