<?php

namespace App\Http\Middleware;

use Closure;

class CheckLocked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->locked) {
                auth()->logout();
                $message = 'Dein Account wurde gesperrt. Sollte dies ein Fehler sein Kontaktiere bitte einen Administrator.';
                return redirect()->route('login')->with('loginError', $message);
        }

        return $next($request);
    }
}
