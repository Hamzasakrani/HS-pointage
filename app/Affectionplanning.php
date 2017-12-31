<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Affectionplanning extends Model {

	
	protected $fillable = ['matricule','planning','date_debut','date_fin','date_publication'];
}
