<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LoginAccessToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /*
    public function handle($request, Closure $next)
    {
       // return $next($request);

        $response = $next($request);
        $user = Auth::user();
        //$token = $user->createToken('Token Name')->accessToken;
        $token = $user->createToken('GeneralAccessToken', ['Generic'])->accessToken;

        return $response;
    }
    */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {
        $user = Auth::user();
        //$token = $user->createToken('Token Name')->accessToken;
        $token = $user->createToken('GeneralAccessToken', ['Generic'])->accessToken;

    }
}
