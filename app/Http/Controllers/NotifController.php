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
class NotifController extends Controller
{
    public function countavis(Request $request)
    {   $login = $request->session()->get('login');
        $js = DB::select('SELECT count(id_a) as som FROM aviss where vu=0 and respteur=?',array( $login));

        return json_encode($js);
    }

    public function listavis(Request $request)
    {
        $login = $request->session()->get('login');
        $js = DB::select('SELECT * FROM aviss where vu=0 and respteur=?',array( $login));

        return json_encode($js);
    }

    public function vu($id,Request $request)
    {  $login = $request->session()->get('login');
        DB::update('update aviss set vu = ? where id_a = ?',array(1 ,$id));
        return redirect()->back();

    }
    public function countcontact(Request $request)
    {   $login = $request->session()->get('login');
        $js = DB::select('SELECT count(id_c) as som FROM contacts where  respteur=?',array( $login));

        return json_encode($js);
    }

    public function listcontact(Request $request)
    {
        $login = $request->session()->get('login');
        $js = DB::select('SELECT * FROM contacts  where  respteur=?',array( $login));

        return json_encode($js);
    }
    public function utilisateur(Request $request)
    {  $login = $request->session()->get('login');
        $js = DB::select('select * from utilisateurs where email<> ?',array($login));
        return json_encode($js);


    }
}