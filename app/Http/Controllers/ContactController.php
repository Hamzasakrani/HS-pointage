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
class ContactController extends Controller {
public function contactentrent(Request $request)
{
    $login = $request->session()->get('login');
    $contactEs=DB::select('select * from contacts where emeteur=? ',array($login) );
    $aviEs=DB::select('select * from aviss where  vu=0 and emeteur=? ',array($login) );
   return view('contact.contactE' ,compact('contactEs','login','aviEs'));
}

    public function contactsortent(Request $request)
    {
        $login = $request->session()->get('login');
        $contactSs=DB::select('select * from contacts where  respteur=? ',array($login) );
        $conges=DB::select('select * from contacts,conges,enmprints where id_e=employer and id_c=contact  and etat="1" and respteur=? ',array($login) );
        $aviSs=DB::select('select * from aviss where   vu=0 and respteur=?  ',array($login) );
        return view('contact.contactS',compact('contactSs','login','aviSs','conges'));
    }
    public function ajoutercontact(Request $request)
    {
        $login = $request->session()->get('login');
        $lists=DB::select('select * from utilisateurs where email<> ?',array($login));
        $employers=DB::select('select * from enmprints ');
        return view('contact.ajoutecontact',compact('contactSs','login','lists','employers'));
    }
    public function contacttransmi(Request $request)
    {
        $login = $request->session()->get('login');
        if(isset($_POST['checkbox'])&& !empty($_POST['checkbox'])) {
            $cs = $_POST['checkbox'];
            foreach ($cs as $c)
            {
               if ($_POST['type'] == 2) {
                    DB::insert('insert into contacts (emeteur,respteur,theme,commantaire) values (?, ?, ?, ?)', array($login, $c, $_POST['theme'], $_POST['com']));
                   if($_POST['theme']=="demande conge")
                   {
                       $maxs =DB::select('select max(id_c) as id from contacts  ') ;

                       foreach ($maxs as $max) {
                           $id = $max->id;
                           DB::insert('insert into conges (employer,type,date_debut,date_fin,etat,contact) values (?, ?, ?, ? ,? ,?)', array($_POST['employer'], $_POST['types'], $_POST['date_debut'], $_POST['date_fin'], 1,$id));
                       }
                   }
                } else if ($_POST['type'] == 1) {
                    DB::insert('insert into aviss (emeteur,respteur,theme,commantaire) values (?, ?, ?, ?)', array($login, $c, $_POST['theme'], $_POST['com']));

               }

            }

            }
     return redirect('contactentrent');
    }
public function repenseconge(Request $request)
{
    $login = $request->session()->get('login');
    
}
}