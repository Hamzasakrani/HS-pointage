<?php namespace App\Http\Controllers;
use DB;
use App\Client;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use Input;
use App\Http\Controllers\Controller;

use Request as hamza;
use DateTime;
use DatePeriod;
use DateIntercal;
use Charts;
use Illuminate\Support\Facades\View;
class AffectationController extends Controller {

public function affectationgroup(Request $request)
{
    $login = $request->session()->get('login');
    $gbs =DB::select('select * from boutiques') ;
    $ems =DB::select('select * from enmprints,boutiques where id_b=boutique') ;
    return view("affectation.affectationgrou",compact('ems','login','gbs'));
}
 public function affectationplanning(Request $request)
 {
     $login = $request->session()->get('login');
     $profil = $request->session()->get('profil');
   $boutique = $request->session()->get('boutique');

//mta3 kol gestonner wa7dou
     if ($profil=="GB")
     {
     $gbs =DB::select('select * from boutiques,groups where id_g=code_data and id_g= ? ',array($boutique)) ;
     $plans =DB::select('select * from plannings,lundis,mardis,mercredis,jeudis,vendredis,samedis,dimanches where id_l=lundi and id_m=mardi and id_me=mercredi and id_j=jeudi and id_v=vendredi and id_s=samedi and id_d =dimanche and ajouter_par= ? ',array( $login)) ;
     }
     else
     {
         $gbs =DB::select('select * from boutiques,groups where id_g=code_data  ') ;
         $plans =DB::select('select * from plannings,lundis,mardis,mercredis,jeudis,vendredis,samedis,dimanches where id_l=lundi and id_m=mardi and id_me=mercredi and id_j=jeudi and id_v=vendredi and id_s=samedi and id_d =dimanche  ') ;
     }
     return view("affectation.affectationplan",compact('plans','login','gbs'));

 }
    public function affectationgroupinsert(Request $request)
    {
        $login = $request->session()->get('login');
        $gbs =DB::select('select * from boutiques') ;
        $ems =DB::select('select * from enmprints,boutiques where id_b=boutique') ;
        return view("affectation.affectationgrou",compact('ems','login','gbs'));
    }
}