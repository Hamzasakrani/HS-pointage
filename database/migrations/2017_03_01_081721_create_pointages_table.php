<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pointages', function(Blueprint $table)
		{
			$table->increments('id_pointage');
			$table->string('matricule');
			$table->date('date_pointe');

				$table->time('heur_point');
			
		
		
	
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
		Schema::drop('pointages');
	}

}
