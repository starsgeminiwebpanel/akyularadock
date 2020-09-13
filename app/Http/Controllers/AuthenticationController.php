<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthenticationController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /*
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
   */
        public function redirectOauth(Request $request){
            $request->session()->put('state', $state = Str::random(40));
            $request->session()->put('client_id', $request->client_id);
            $request->session()->put('client_secret', $request->client_secret);
            $request->session()->put('redirect_uri', $request->callback_url);

            $query = http_build_query([
                'client_id' => $request->client_id,
                'client_secret' => $request->client_secret,
                'redirect_uri' => $request->callback_url,
                'response_type' => 'code',
                'scope' => 'Generic',
                'state' => $state,
            ]);

            return redirect('http://laradock.akyu:8090/oauth/authorize?'.$query);
        }
        /*
        public function tokenCallback(Request $request){
            $state = $request->session()->pull('state');
            $client_id = $request->session()->pull('client_id', $request->client_id);
            $client_secret = $request->session()->pull('client_secret', $request->client_secret);
            $callback_url = $request->session()->pull('redirect_uri', $request->callback_url);

            throw_unless(
                strlen($state) > 0 && $state === $request->state,
                InvalidArgumentException::class
            );

            $http = new GuzzleHttp\Client;

            $response = $http->post('http://192.168.1.105:8090/oauth/token', [
                'form_params' => [
                    'grant_type' => 'authorization_code',
                    'client_id' => $client_id,
                    'client_secret' => $client_secret,
                    'redirect_uri' => $callback_url,
                    'code' => $request->code,
                ],
            ]);

            $res = json_decode((string) $response->getBody(), true);
            //return $res["access_token"];
            $request->headers->add(['Authorization' => "Bearer {$res["access_token"]}"]);
            $request->session()->put('bearerToken',$res["access_token"]);
            return redirect('http://laradock.akyu:8090/home');
        }
        */
}
