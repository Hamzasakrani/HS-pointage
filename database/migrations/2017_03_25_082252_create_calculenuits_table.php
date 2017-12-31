<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalculenuitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('calculenuits', function(Blueprint $table)
		{
			$table->increments('id_calculenuit');
			$table->string('matricule');
			$table->date('date_pointe');

				$table->time('somme_heur');
			
		
		
	
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
		Schema::drop('calculenuits');
	}

}
