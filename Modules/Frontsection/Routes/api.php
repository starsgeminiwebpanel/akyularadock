<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/frontsection', function (Request $request) {
    return $request->user();
});
Route::post('/susers', 'API\UserController@store');
Route::apiResource('users', 'API\UserController')->middleware('auth:api');
//Route::apiResource('users', 'API\UserController');

/*
Route::group(['middleware' => 'api' ,'namespace' => 'Modules\Frontsection\Http\Controllers'], function () {
    Route::get('/fronsection/users', 'API\UserController@index')->name('API.frontsection.users');
 //   Route::get('/world/regions', 'API\WorldController@regionlist')->name('API.world.regionlist');
 //   Route::get('/world/cities', 'API\WorldController@citylist')->name('API.world.citylist');
});
*/
/*
Route::group([
    'name' => 'user',
    'namespace' => 'API',
    'prefix' => 'frontsection',
],function(){
   Route::get('users','UserController@index')->name('users');
});

Route::prefix('api')->group(function () {

    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('/users','API/UserController@index');
    });

});

Route::middleware('auth:api')->get('/frontsection/photos','API/UserController@index');

Route::group(['middleware' => 'auth:api', 'namespace' => 'Modules\Frontsection\Http\Controllers'], function () {
    //Route::post('/', 'ShopList\ShoplistController@search')->name('search.post.home');
    Route::get('/frontsection/users', 'API/UserController@index')->name('users');
  //  Route::post('/{address_1}/{address_2?}/{address_3?}/{address_4?}', 'ShopList\ShoplistController@search')->name('search.post.form');
});
*/
