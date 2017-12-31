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
use DateIntercal;
class GestionPointController extends Controller {

public function index(Request $request)
 {  $login = $request->session()->get('login');
	 $bs =DB::select('select * from boutiques') ;
// $b="<h1>dzdzdz</h1>";
	return view("gestionPoint.ajoutEm",compact('bs','login'));
}
 public function ajouterbout()
 {
 	\App\Boutique::create(hamza::all());
 	 return redirect('boutique');  
 }
public function ajoutEmprint()
{
	\App\Enmprint::create(hamza::all());
   
//$ems =DB::select('select * from enmprints,boutiques where id_b=boutique') ;
	 return redirect('afficheEmprint');
}
public function afficheEmprint(Request $request)
{
	$login = $request->session()->get('login');
	$ems =DB::select('select * from enmprints,boutiques where id_b=boutique') ;
	return view("gestionPoint.consultEm",compact('ems','login'));
 
}

public function modif()
{
	$now = new DateTime();
 $date3=$now->format('Y-m-d H:i:s');  
	/*if(isset($_POST['factures']) && !empty($_POST['factures'])){
		$factures=$_POST['factures'];
	foreach ($factures as $facture) {*/
 DB::update('update enmprints set nom = ?,prenom= ?,matricule =?,updated_at= ? where id_e = ?',array($_POST['nom'],$_POST['prenom'],$_POST['matricule'],$date3,$_POST['id']));

 return redirect('afficheEmprint');

}

public function sup($id)
{



	
		DB::table('enmprints')->where('id_e', '=',$id )->delete();
        return redirect('afficheEmprint');      


}
public function ajouterboutique(Request $request)
{
	$login = $request->session()->get('login');
	$bs =DB::select('select * from boutiques,groups where id_g=code_data') ;
	$gbs =DB::select('select * from groups') ;
	return view("gestionPoint.ajouterBou",compact('bs','login','gbs'));
}

public function supboutique($idb)
{



	
		DB::table('boutiques')->where('id_b', '=',$idb )->delete();
        return redirect('boutique');  
           


}
public function modifboutique()
{
	$now = new DateTime();
 $date3=$now->format('Y-m-d H:i:s');  
	DB::update('update boutiques set nom_b= ?,code_data =?,updated_at= ? where id_b = ?',array($_POST['nom_b'],$_POST['code_data'],$date3,$_POST['id']));
return redirect('boutique');  
           
}
}
