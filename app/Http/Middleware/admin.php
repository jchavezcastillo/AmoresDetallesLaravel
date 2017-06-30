<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use  App\Http\Middleware\Auth;



class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
	 
	 
	 protected $auth;
	 
	 public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
	
	 
	 
    public function handle($request, Closure $next)
    {
		if(Auth::check()){
			$usuario_actual=\Auth::user();
			if($usuario_actual->user_group_id!=1){
				Logger::info('No tiene suficientes Privilegios para acceder a esta seccion ni realizar estas peticiones');
			 return "No tiene suficientes Privilegios para acceder a esta seccion ni realizar estas peticiones";
			}
			return $next($request);
		
		}
		return "no hay ususario logeado";
    }
}
