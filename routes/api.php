<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('tools', 'ToolsController@index');
Route::post('tool', 'ToolsController@createTool');
Route::put('tool', 'ToolsController@updateToolById');


Route::group([
    'prefix' => 'auth'
], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
