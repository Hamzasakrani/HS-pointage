<?php namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Carbon\Carbon;
use DateInterval;
use DateTime;
class CalculerNuit extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'calculer:nuit';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'calcule heurs du nuit.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */


	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */


	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
			['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
		];
	}

	/**
	 *
     */

	public function handle()
	{
		$p = "00:00:00";

		$planningjour1s=array();
		$planningjour2s=array();
		//$c1=new CustomCollection($models);

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

	}

}
