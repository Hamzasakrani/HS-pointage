<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipes', function(Blueprint $table)
		{
		$table->increments('id_equipe');
			$table->integer('id_em')->unsigned()->nullable();
			$table->integer('id_boutique')->unsigned()->nullable();
			$table->foreign('id_em')->references('id_e')->on('enmprints')->onDelete('cascade')->onUpdate('cascade');
		$table->foreign('id_boutique')->references('id_b')->on('boutiques')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('equipes');
	}

}
