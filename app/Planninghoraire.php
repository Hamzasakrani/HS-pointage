<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Planninghoraire extends Model {

	
	protected $fillable = ['nom_planning','s1','s2','s3','s4','type','date_publication'];
}
