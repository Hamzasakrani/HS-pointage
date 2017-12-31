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
class RendementController extends Controller {
public function rendement(Request $request )
{
    $login = $request->session()->get('login');
    $messages=DB::select('select count(id) as somme from messages');
    $daten = array();
    $heurn=array();
    $datej = array();
    $heurj = array();
    $viewers = DB::select('select date_pointe from calculenuits  ') ;

    $clicks =  DB::select('select somme_heur from calculenuits  ') ;
    foreach($viewers as $viewer)
    {
        $daten[]=$viewer->date_pointe;
    }
    foreach($clicks as $click)
    {  $p=Datetime::createFromFormat('H:i:s',$click->somme_heur)->format('G,i');
        floatval($p) ;
        $heurn[]=floatval($p) ;
    }
    $click = json_encode($daten);



    $viewer = json_encode($heurn);

    return view('charts.rendement',compact('click','viewer','messages','login'));
}

}
