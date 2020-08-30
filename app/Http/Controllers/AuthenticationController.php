<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthenticationController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function login(Request $request){

        $input = $request->all();
        $validator = Validator::make($input, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {

            return response()->json($validator->errors(), 417);
        }
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {

            $user = Auth::user();
            //$success['token'] = $user->createToken('generalAccessToken')->accessToken;
            //return response()->json(['success' => $success], 200);
            $token = $user->createToken('generalAccessToken')->accessToken;
            return response()->json(['token' => $token], 200);

        }
        else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

    }

    public function logout(Request $request){

        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
        }
}
