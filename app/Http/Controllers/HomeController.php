<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $user = Auth::user();
        //$token = $user->createToken('Token Name')->accessToken;
       // $token = $user->createToken('GeneralAccessToken', ['Generic'])->accessToken;
        //$token = $token->token;
        //$token->expires_at = Carbon::now()->addDays(5);
        //$token->save();
        // Creating a token with scopes...
       // $token = $user->createToken('My Token', ['place-orders'])->accessToken;
        /*
        return view('home')->with('token', response()->json([
            'token' => $token
        ]));
       */
       // return view('home')->with('token',$token);
        return view('home');
        }

        public function generateTokens(){
        return view('generate-tokens');
        }
}
