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

class ConnexionController extends Controller
{

    public function connexion()
    {
       $message="";
        return view('admin.sign-in',compact('message'));
    }

    public function controlconnexion(Request $request)
    {
        $message="vorte login et/ou mot de passe est incorrecte";
        $connexions = DB::select('select *from utilisateurs where email = ? ', array($_POST['email']));
        if ($connexions) {
            foreach ($connexions as $connexion) {
                $decrypted = Crypt::decrypt($connexion->mdp );
                if( $decrypted==$_POST['mdp']) {
                    $request->session()->set('login', $_POST['email']);
                    $request->session()->save();
                    $login = $_POST['email'];
                    $request->session()->set('profil', $connexion->profil);
                    $request->session()->set('boutique', $connexion->boutique);
                    $request->session()->save();
                   return redirect('contactentrent');
                }
                else
                {

                    return view('admin.sign-in',compact('message'));
                }
                }
        } else {
            return view('admin.sign-in',compact('message'));
        }
    }
    public function deconnexion(Request $request)
    {
        Session::flush();
      return  redirect('connexion');
    }
}