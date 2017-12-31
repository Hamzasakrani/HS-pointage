<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model {

	
	protected $fillable = ['nom_planning','lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche','date_publication'];
}
