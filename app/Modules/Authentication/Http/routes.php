<?php

/*
|--------------------------------------------------------------------------
| Module Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the module.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
$api = app('Dingo\Api\Routing\Router');



$api->version(['version' => 'v1', 'prefix' => 'api','protected' => true], function ($api) {
    
    $api->group(['prefix' => 'authentication', 'namespace' => 'App\Http\Controllers'], function ($api) {
        //dd("grupo");// Endpoints registered here will have the "foo" middleware applied.        
        $api->get('/', 'HomeController@index');
        $api->post('/login', 'HomeController@login');
    });
});


