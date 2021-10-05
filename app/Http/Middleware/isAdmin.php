<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        // prüft ob der benutzer ein admin ist
        if(auth()->user()->isAdmin == 1){
            return $next($request);
        }

        session()->flash('flash.banner', 'Zugang verweigert ungültige anfrage.');
        session()->flash('flash.bannerStyle', 'danger');
        return redirect()->route('dashboard');
    }
}
