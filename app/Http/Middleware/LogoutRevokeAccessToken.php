<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LogoutRevokeAccessToken
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
        $currentuser = Auth::user();
        foreach ($currentuser->tokens as $token) {
               $token->revoke();
        }
        // $request->session()->flash('status', 'Logoout Correctly!');
        $response = $next($request);

        //$currentuser = Auth::user();
        //$currentuser->token->revoke();
        //foreach ($currentuser->tokens as $token) {
        //    $token->revoke();
        //}
        return $response;
       // return $next($request);
    }
    public function terminate($request, $response)
    {
        /*
        $user = Auth::user();
        $token = $user->token();
        $token->revoke();
        */
        //$token = $request->user()->token();
        //$token->revoke();
        $user = $response->user();

        foreach ($user->tokens as $token) {
            $token->revoke();
        }
    }
}
