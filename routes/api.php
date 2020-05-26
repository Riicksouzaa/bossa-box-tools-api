<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
//    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});


Route::group(['prefix' => 'swagger'], function () {
    Route::get('/', function () {
        return view('swagger');
    });
    Route::get('/api.json', 'SwaggerController@index');
});


Route::group(['middleware' => 'apiJwt'], function () {
    Route::get('tools', 'ToolsController@index');
    Route::post('tools', 'ToolsController@createTool');
    Route::put('tools', 'ToolsController@updateToolById');
    Route::delete('tools', 'ToolsController@deleteToolById');
});