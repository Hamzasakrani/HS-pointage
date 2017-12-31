<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Conge extends Model {


    protected $fillable = ['employer','type','date_debut','date_fin','heur_debut','heur_fin','date_publication'];
}
