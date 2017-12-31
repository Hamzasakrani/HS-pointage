<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanninghorairesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planninghoraires', function(Blueprint $table)
		{
			$table->increments('id_plannigh');
			$table->string('nom_planning');
			
	            $table->time('s1');
			$table->time('s2');
			$table->time('s3');
			$table->time('s4');
			$table->string('type');
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
		Schema::drop('planninghoraires');
	}

}
