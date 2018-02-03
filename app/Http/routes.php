<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    /*
     * Auth Routes
     */
    $api->post('auth', '\App\Http\Controllers\Api\Auth\AuthController@authenticate');

    /*
     * Material Routes
     */
    $api->group(['prefix' => 'material', 'middleware' => ['jwt.auth', 'jwt.refresh']], function($api) {
        $api->get('/', '\App\Http\Controllers\Api\MaterialController@all');
    });

    /*
     * Viaje Routes
     */
    $api->group(['prefix' => 'viaje', 'middleware' => ['jwt.auth', 'jwt.refresh']], function($api) {
        $api->get('/', '\App\Http\Controllers\Api\ViajeController@all');
    });
});