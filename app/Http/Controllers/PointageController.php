<?php namespace App\Http\Controllers;
use DB;
use App\Client;
use App\Calculenuit;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\CustomCollection;
use App\Http\Controllers\Controller;
use Request as hamza;
use DateTime;
use DatePeriod;
use DateInterval;
use DateIntercal;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF;
use Excel;
class Planning
{

}

class PointageController extends Controller {

    public function pdfview(Request $request)
    {    $login = $request->session()->get('login');
     //   $data  =Calculenuit::get()->toArray();
       $data=DB::select("select nom,prenom,calculenuits.matricule as matricule,date_pointe,somme_heur,sodeconge,nom_b,fonction from calculenuits,enmprints,boutiques where calculenuits.matricule=enmprints.matricule and id_b=boutique ");
       $data=json_decode(json_encode($data), true);
        return Excel::create('pointage', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download("pdf");
    }
    public function exportPDF()
    {  //page html !!!!!!!!
      //  $data  =Calculenuit::get()->toArray();
        $data=DB::select("select nom,prenom,calculenuits.matricule as matricule,date_pointe as date_pointage,somme_heur as somme_heurs,sodeconge,nom_b as nom_boutique,fonction from calculenuits,enmprints,boutiques where calculenuits.matricule=enmprints.matricule and id_b=boutique ");
        $data=json_decode(json_encode($data), true);
        return Excel::create('pointage', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download("xlsx");
    }
    /*select type,date_pointe,heur_point from affectionplannings,planninghoraires,pointages where id_plannigh=planning and pointages.matricule=affectionplannings.matricule and affectionplannings.matricule=1888 and
    ( heur_point=(select max(heur_point) FROM pointages WHERE date_pointe= "2017-03-16" and heur_point>"12:00:00") or heur_point=(select min(heur_point)FROM pointages WHERE date_pointe= "2017-03-17" and heur_point<"12:00:00"))*/
    public function consulterpointage(Request $request)
    {
        $login = $request->session()->get('login');
        $dates=DB::select("select date_pointe from calculenuits");
        //
        $pnuits=DB::select("select nom,prenom,calculenuits.matricule as matricule,date_pointe,somme_heur,sodeconge,nom_b,fonction from calculenuits,enmprints,boutiques where calculenuits.matricule=enmprints.matricule and id_b=boutique ");
//


        return view("gestionPointage.consulterpointage",compact('pnuits','login','dates'));
    }
    public function calculepointagejour()
    {
//S1 max -> min

        $E1s = DB::select("select date_pointe,heur_point from pointages where heur_point=(SELECT min(heur_point)from pointages WHERE matricule=1000 and date_pointe='2017-04-10')");
        $S1s = DB::select("select date_pointe,heur_point from pointages where heur_point=(SELECT max(heur_point)from pointages WHERE matricule=1000 and date_pointe='2017-04-10'  AND heur_point<='13:30:00')");
        $E2s = DB::select("select date_pointe,heur_point from pointages where heur_point=(SELECT min(heur_point)from pointages WHERE matricule=1000 and date_pointe='2017-04-10'  AND heur_point>='13:30:00')");
        $S2s = DB::select("select date_pointe,heur_point from pointages where heur_point=(SELECT max(heur_point)from pointages WHERE matricule=1000 and date_pointe='2017-04-10')");
        foreach ($E1s as $E1)
        {
            foreach ($S1s as $S1) {
                foreach ($E2s as $E2)
                {
                    foreach ($S2s as $S2) {
                        $h1 = $E1->heur_point;
                        $h2 = $S1->heur_point;
                        $h3 = $E2->heur_point;
                        $h4 = $S2->heur_point;
                        $time1 = new DateTime($h1);
                        $time2 = new DateTime($h2);
                        $time3 = new DateTime($h3);
                        $time4 = new DateTime($h4);
                        //   $d=$time2-$time1;
                        $total = $time2->diff($time1)->format("%H:%I:%S") +
                            $time3->diff($time4)->format("%H:%I:%S");
                        Datetime::createFromFormat('H:i:s',$total);
                        $total;
                        DB::insert("insert into calculejours(matricule,e1,s1,e2,s2,date_pointe,somme_heur) values(?,?,?,?,?,?,?)",array('1000',$E1->heur_point,$S1->heur_point,$E2->heur_point,$S2->heur_point,'2017-04-10',$total.":00:00"));
                        "<br>".gmdate("H:i:s",strtotime("01:02:03")/3600+strtotime("01:02:03"));
                    }}
            }
        }
    }
    public function calculepointagenuit()
    {
        $p = "00:00:00";
//$schedule->command(‘inspire’)->dailyAt(‘10.30’);	
        $planningjour1s=array();
        $planningjour2s=array();
        //$c1=new CustomCollection($models);
//	$c2=new CustomCollection($models);
        $planninghoraires=DB::select('select * from affectionplannings where planning="7"');
        foreach ($planninghoraires as $planninghoraire)
        {
            setlocale(LC_TIME, '');


            $dateS = new Carbon("2017-03-14");
            //$dateS->formatLocalized('%A %d %B %Y');
            $dateE = new Carbon("2017-03-23");
            //  $dateE->formatLocalized('%A %d %B %Y');
            $step  = new DateInterval('P1D');
            $h= Carbon::createFromFormat('H:i:s', '00:00:00')->format('g:iA');
            // $h= $h->date('H:i:s');
            $j=0;



            for($cur = $dateS; $cur <= $dateE; $cur->add($step))
            {
                $b1=DB::select('select type,date_pointe,heur_point from affectionplannings,planninghoraires,pointages where id_plannigh=planning
                                  and pointages.matricule=affectionplannings.matricule and affectionplannings.matricule=1888
                                  and heur_point=(select min(heur_point) FROM pointages WHERE date_pointe= (select min(DATE_SUB(date_pointe,INTERVAL 1 DAY)) FROM pointages where  date_pointe= ?  ) and heur_point>"12:00:00")
                            ',array($cur)) ;
                $planningjour1s =$b1;

                $b2=DB::select('select type,date_pointe,heur_point from affectionplannings,planninghoraires,pointages where id_plannigh=planning
                                  and pointages.matricule=affectionplannings.matricule
                                  and affectionplannings.matricule=1888 and heur_point=(select max(heur_point)FROM pointages WHERE date_pointe= ? and heur_point<"12:00:00")
                            ',array($cur)) ;
                $planningjour2s =$b2;


                {$j=$j+2;

                    foreach ($planningjour1s as $planningjour1)

                    { foreach ($planningjour2s as $planningjour2)
                    {

                        $date1 = $planningjour1->date_pointe." ".$planningjour1->heur_point;
                        $date2 = $planningjour2->date_pointe." ". $planningjour2->heur_point;

                        $time1 = new DateTime($date1);
                        $time2 = new DateTime($date2);
                        //   $d=$time2-$time1;
                        $total=$time2->diff($time1);
                        $total= $total->format("%H:%I:%S");
                        DB::insert("insert into calculenuits(matricule,date_pointe,somme_heur) values(?,?,?)",array('1888',$cur,$total));
                        // $j=$j+5;

                        $total = strtotime($total);
//echo $p+$total;
                        echo $total = date("H:i:s",$total)."<br>";

                        $p=$p+$total;
                        echo "alooooooo <br>";
                    }
                    }
                }
                // $h=$h+

            }

        }
//	 $planningjour2s[]=$myObject2;




    }
public function pointageexep(Request $request)
{
    $login = $request->session()->get('login');
    $ems =DB::select('select * from enmprints,boutiques where id_b=boutique ') ;
    return view("gestionPointage.pointageexe",compact('ems','login'));
}
   /*public function filter(Request $request)
    {
        $login = $request->session()->get('login');
        $dates=DB::select("select date_pointe from calculenuits");
        //
        $pnuits=DB::select("select nom,prenom,calculenuits.matricule as matricule,date_pointe,somme_heur,sodeconge,nom_b,fonction from calculenuits,enmprints,boutiques where calculenuits.matricule=enmprints.matricule and id_b=boutique and boutique=?",array);
//


        return view("gestionPointage.consulterpointage",compact('pnuits','login','dates'));

    }*/


}