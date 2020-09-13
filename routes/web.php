<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/{any}', 'SpaController@index')->where('any', '.*');

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

/*
Route::middleware('auth')->group(function(){
    Route::get('/tokenCallback', 'AuthenticationController@tokenCallback')->name('tokenCallback');
});
*/
Route::get('/redirect','AuthenticationController@redirectOauth');
/*
Route::get('/redirect', function (Request $request) {
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
});
*/

Route::get('/tokenCallback', function (Request $request) {
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
    /*
    $request->headers->add(['Authorization' => "Bearer {$res["access_token"]}",
        'Accept' => 'application/json'
        ]);
    */
    $request->headers->set('Authorization' , "Bearer {$res["access_token"]}");
    $request->headers->set('Accept' , 'application/json');

   // $request->headers->set('Authorization' , "Bearer {$res["access_token"]}");
    $request->session()->put('bearerToken',$res["access_token"]);
    $request->session()->put('refreshToken',$res["refresh_token"]);
    $request->session()->put('expiresIn',$res["expires_in"]);

    if(session()->has('bearerToken')
        && session()->has('refreshToken') &&
        session()->has('expiresIn')){
        JavaScript::put([
            'bearerToken' =>  $res["access_token"],
            'refreshToken' => $res["refresh_token"],
            'expiresIn' => $res["expires_in"],
        ]);
    }

    return redirect('http://laradock.akyu:8090/home');
});



// Route::post('login', '\Auth\LoginController@login')->middleware('loginaccesstoken');

/*
Route::prefix('frontsection')->group(function() {
    //Route::get('frontendmain', 'FrontsectionController@index');
});
*/
// Route::get('/{any}', 'SpaController@index')->where('any', '.*');
// Route::get('/testindex', 'TestController@index')->name('testindex');
