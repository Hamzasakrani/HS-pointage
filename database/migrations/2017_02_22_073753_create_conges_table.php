<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conges', function(Blueprint $table)
		{
			$table->increments('id_conge');
			$table->integer('employer')->unsigned()->nullable();
			$table->string('type');
				$table->date('date_debut');
			$table->date('date_fin');
			$table->time('heur_debut');
			$table->time('heur_fin');
			$table->integer('etat');
			$table->integer('contact');
			$table->timestamps();
		  $table->foreign('employer')->references('id_e')->on('enmprints')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conges');
	}


}
