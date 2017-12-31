<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */


	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ($request->session()->get('login')===null)
		{
			return redirect('connexion');
		}
		elseif($request->session()->get('login')!==null)
		{
			return redirect('Rendement');
		}

		return $next($request);
	}

}
