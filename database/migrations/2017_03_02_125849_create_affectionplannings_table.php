<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffectionplanningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('affectionplannings', function(Blueprint $table)
		{
			$table->increments('id_affection');
			$table->string('boutique');
			$table->string('planning');
			$table->date('date_debut');
			$table->date('date_fin');
			
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
		Schema::drop('affectionplannings');
	}

}
