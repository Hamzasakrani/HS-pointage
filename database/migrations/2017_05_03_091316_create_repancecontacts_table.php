<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepancecontactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('repnancecontacts', function(Blueprint $table)
		{
			$table->Increments('id_rc');
			$table->string('emeteur');
			$table->string('respteur');
			$table->string('profil');
			$table->string('theme');
			$table->string('commantaire');
			$table->string('conserne');
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
		Schema::drop('repnancecontacts');
	}

}
