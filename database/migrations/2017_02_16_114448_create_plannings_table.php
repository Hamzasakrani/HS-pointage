<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
Schema::create('plannings', function(Blueprint $table)
		{
			$table->increments('id_planning');
			$table->string('nom_planning');
			$table->integer('lundi')->unsigned()->nullable();
			$table->integer('mardi')->unsigned()->nullable();
			$table->integer('mercredi')->unsigned()->nullable();
			$table->integer('jeudi')->unsigned()->nullable();
			$table->integer('vendredi')->unsigned()->nullable();
			$table->integer('samedi')->unsigned()->nullable();
           $table->integer('dimanche')->unsigned()->nullable();
			$table->string('ajouter_par');
            $table->foreign('lundi')->references('id_l')->on('lundis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mardi')->references('id_m')->on('mardis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mercredi')->references('id_me')->on('mercredis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('jeudi')->references('id_j')->on('jeudis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('vendredi')->references('id_v')->on('vendredis')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('samedi')->references('id_s')->on('samedis')->onDelete('cascade')->onUpdate('cascade');
              $table->foreign('dimanche')->references('id_d')->on('dimanches')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('plannings');
	}

}
