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
class CongeController extends Controller {
public function ajouterconge()
{

  /*  $datetime1 = new DateTime('2009-10-11');
    $datetime2 = new DateTime('2009-10-13');
    $interval = $datetime1->diff($datetime2);
echo    $interval->format('%a ');
*/
    \App\Conge::create(hamza::all());
    return redirect('consulterconge');
  }
public function consulterconge(Request $request)
{
    $login = $request->session()->get('login');
    $ems =DB::select('select * from enmprints,boutiques,conges where id_b=boutique and id_e=employer ') ;
    return view("gestionconge.consulterconge",compact('ems','login'));
}
}