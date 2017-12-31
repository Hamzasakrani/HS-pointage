<?php namespace App\Http\Controllers;

use DB;
use App\Client;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Request as hamza;
use DateTime;
use DatePeriod;
use DateIntercal;
use Charts;
use Illuminate\Support\Facades\View;

class PrivilegeController extends Controller
{

    public function interfaceajouter(Request $request)
    {
        $login = $request->session()->get('login');
      /*echo  $encrypted = Crypt::encrypt('secret');
     echo "<br>";
      echo  $decrypted = Crypt::decrypt($encrypted );
    */
        $employers=DB::select('select * from enmprints ' );
        $boutiques=DB::select('select * from boutiques ' );
        $groups=DB::select('select * from groups ' );
        return view('gestionPrivilege.nouveluser',compact('login','employers','boutiques','groups'));

      }
    public function debrif(Request $request)
    {
        $login = $request->session()->get('login');
        /*echo  $encrypted = Crypt::encrypt('secret');
       echo "<br>";
        echo  $decrypted = Crypt::decrypt($encrypted );
      */
        $employers=DB::select('select * from enmprints ' );
        $boutiques=DB::select('select * from boutiques ' );
        $groups=DB::select('select * from groups ' );
        return view('gestionPrivilege.debrif',compact('login','employers','boutiques','groups'));

    }
    public function ajouteruser(Request $request)
    {
        $login = $request->session()->get('login');
        $encrypted = Crypt::encrypt($_POST['mdp']);

        DB::insert('insert into utilisateurs (matricule,email,mdp,profil,ajouterpar,boutique) values (?, ?, ?, ?, ?, ?)',  array($_POST['matricule'],$_POST['email'],$encrypted,$_POST['profil'],$login ,$_POST['boutique']));

     return  redirect('listeutilisateur');
    }
    public function listeutilisateur(Request $request)
    {
        $login = $request->session()->get('login');
        $utilisaters=DB::select('select * from utilisateurs ' );

        return view('gestionPrivilege.listeutilisateur',compact('login','utilisaters'));
    }
    public function menu(Request $request)
    {   $login = $request->session()->get('profil');
        if($login=="RB")
        { $menu=DB::select('select menus.libiler as menu ,id_m as idm ,icon from menus where droits="3" or droits="6"');}
        else if($login=="GB")
        { $menu=DB::select('select menus.libiler as menu ,id_m as idm ,icon from menus where droits="1" or droits="3" or droits="4" or droits="2"  ');}
        else if($login=="RH")
        { $menu=DB::select('select menus.libiler as menu ,id_m as idm ,icon from menus where droits="1" or droits="3" or droits="5" or droits="2"  ');}
        else if($login=="admin")
        { $menu=DB::select('select menus.libiler as menu ,id_m as idm ,icon from menus   ');}

        return json_encode($menu);
    }
    public function sousmenu()
    {
        $sousmenu=DB::select('select sousmenus.libiler as sousmenu,id_menu as ids,url from sousmenus  ');
        return json_encode($sousmenu);
    }
 public function profil (Request $request )
 {
     $login = $request->session()->get('login');
     $employers=DB::select('select * from utilisateurs,enmprints where enmprints.matricule=utilisateurs.matricule and email=? ',array($login) );
     return json_encode($employers);
 }
}