<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Enmprint extends Model {

	
	protected $fillable = ['nom','prenom','matricule','cv','set','boutique','tel','datee','fonction','date_publication'];
}
