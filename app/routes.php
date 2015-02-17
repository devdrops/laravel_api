<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['prefix' => 'api'], function() 
{
    Route::group(['prefix' => 'user'], function() 
    {
        Route::get('', ['uses' => 'UserController@allUsers']);

        Route::get('{id}', ['uses' => 'UserController@getUser']);

        Route::post('', ['uses' => 'UserController@saveUser']);

        Route::put('{id}', ['uses' => 'UserController@updateUSer']);

        Route::delete('{id}', ['uses' => 'UserController@deleteUSer']);
    });
});

//Rota para exibição da documentação
Route::get('docs', function()
{
    return View::make('api.docs.index');
});
//em caso de erro 404 redirecionar para docs
App::missing(function()
{
    return Redirect::to('docs');
});
