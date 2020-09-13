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
        /*
        JavaScript::put([
            'bearerToken' =>  $token,
        ]);
        */
        $request->session()->put('bearerToken', $token);
        // session('bearerToken' , 'ssfsdfsdfd');
        //dd($token);
        // $request->session()->flash('status', 'Token Set Correctly!');
        /*
        $request->headers->add(['Authorization' => "Bearer {$token}",
            'Accept' => 'application/json'
        ]);
        */
        /*
        if($token != null && $token != ""){
            JavaScript::put([
                'bearerToken' =>  $token,
            ]);
        }else{ // you can use redirect instead of following
            JavaScript::put([
                'bearerToken' => 'notFound',
            ]);
        }
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With, X-XSRF-TOKEN')
        ->header("Authorization", "Bearer {$token}")
        ->header("Accept", "application/json");
        */
    }
}
