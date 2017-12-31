<?php namespace App\Http\Controllers;
use DB;
use App\Client;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller; 
use Request as hamza;
use DateTime;
use DatePeriod;
use DateInterval;
use DateIntercal;
use Carbon\Carbon;
class HoraireController extends Controller {
public function cong (Request $request)
{
	$login = $request->session()->get('login');
	$ems =DB::select('select * from enmprints,boutiques where id_b=boutique ') ;
	return view("gestionHoraire.congee",compact('ems','login'));

}
public function ajouterplan(Request $request)
{ $login = $request->session()->get('login');
	return view("gestionHoraire.ajouterPlan",compact('login'));
}
public function Planning(Request $request)
{
	$login = $request->session()->get('login');
	return view("gestionHoraire.planning",compact('login'));
}
public function ajouterPlanNuit(Request $request)
{
	$login = $request->session()->get('login');
	return view("gestionHoraire.ajoutePlanNuit",compact('login'));
}
public function affectationplanning(Request $request)
{ $bs =DB::select('select * from planninghoraires') ;
	$ems =DB::select('select * from enmprints,boutiques where id_b=boutique') ;
	return view("gestionHoraire.affecterPlanning",compact("ems",'bs','login'));
}
public function ajouterPlanning(Request $request)
{
	$login = $request->session()->get('login');
	$profil = $request->session()->get('profil');
	\App\Lundi::create(hamza::all());
	\App\Mardi::create(hamza::all());
	\App\Mercredi::create(hamza::all());
	\App\Jeudi::create(hamza::all());
	\App\Vendredi::create(hamza::all());
	\App\Samedi::create(hamza::all());
	\App\Dimanche::create(hamza::all());
	$maxs =DB::select('select max(id_l) as id from lundis  ') ;
	
	foreach ($maxs as $max)
	{
		$id=$max->id;
	
	$now = new DateTime();
 $date3=$now->format('Y-m-d H:i:s'); 
	//\App\Planning::create(hamza::all());
  DB::insert('insert into plannings (nom_planning,lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche,ajouter_par,created_at) values (?, ?, ?, ?, ?, ?, ?, ?, ? ,?)',  array($_POST['nom_planning'],$id,$id,$id,$id,$id,$id,$id,$login,$date3 ));
  return redirect('consultPlanning');
}
}
public function consultPlanning(Request $request)
{
	$login = $request->session()->get('login');
	$profil = $request->session()->get('profil');
	 $plannings =DB::select('select * from planninghoraires where nom_planning= ?',["model4"]) ;
	foreach ($plannings as $planning)
	{
	setlocale(LC_TIME, '');
	$noms=$planning->nom_planning;
	$dateS = new Carbon("20-02-2017");
	$dateS->formatLocalized('%A %d %B %Y');
$dateE = new Carbon("22-02-2017");
$dateE->formatLocalized('%A %d %B %Y');
$step  = new DateInterval('P1D');
	$s1=$planning->s1;
      $s2=$planning->s2;
	$s3=$planning->s3;
	$s4=$planning->s4;

	}
	if($profil=="GB") {
		$plans = DB::select('select * from plannings,lundis,mardis,mercredis,jeudis,vendredis,samedis,dimanches where id_l=lundi and id_m=mardi and id_me=mercredi and id_j=jeudi and id_v=vendredi and id_s=samedi and id_d =dimanche and ajouter_par = ? ', array($login));
	}
	 else
	 {$plans = DB::select('select * from plannings,lundis,mardis,mercredis,jeudis,vendredis,samedis,dimanches where id_l=lundi and id_m=mardi and id_me=mercredi and id_j=jeudi and id_v=vendredi and id_s=samedi and id_d =dimanche  ');}
	return view("gestionHoraire.consulterPlanning",compact('plans','d','ms','dateS','dateE','step','s1','s2','s3','s4','noms','login'));
	

}
	/*public function consultPlanning(Request $request)
   {
	   $login = $request->session()->get('login');
	$planningjours =DB::select('select * from planninghoraires where type="jour"') ;
	$planningnuits =DB::select('select * from planninghoraires where type="nuit"') ;
	return view("gestionHoraire.consulterplanninghoraire",compact('planningjours','planningnuits','login'));
	
   }*/
    public function ajouterplanninghoraire(Request $request)
    {

	\App\Planninghoraire::create(hamza::all());
	
	return redirect('consultPlanning');
    }
    public function affecterplanning(Request $request)
    {
		$login = $request->session()->get('login');
	\App\Affectionplanning::create(hamza::all());
	
	return redirect('affectationplanning');
    }
}