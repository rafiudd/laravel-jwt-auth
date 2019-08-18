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


$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){
    $api->group(['middleware' => 'jwt.verify'], function ($api) {
        $api->resource('material','App\Http\Controllers\MaterialController');
        $api->DELETE('logout', 'App\Http\Controllers\UserController@logout');
        $api->GET('me', 'App\Http\Controllers\UserController@show');
    });
    $api->POST('register', 'App\Http\Controllers\UserController@register');
    $api->POST('login', 'App\Http\Controllers\UserController@authenticate');
});
