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

Route::get('/',[
   'uses' => 'loginController@index',
    'as' => 'inicio'
 ]);

Route::post('usuario/guardar',[
    'uses' => 'loginController@store',
    'as' => 'user-save'
]);

// Authentication routes...
Route::get('auth/login',
    [
        'uses' => 'loginController@index',
        'as' => 'login'
    ]);

//Rutas para login
Route::post('auth/login', 'Auth\AuthController@autenticar');
Route::get('auth/logout', [
    'middelware' => 'auth',
    'uses' => 'Auth\AuthController@salir',
    'as' => 'salir'
    ]);

//Rutas para registro
Route::get('auth/registro',[
    'middleware' => 'auth',
    'uses' => 'Auth\AuthController@registroIndex',
    'as' => 'registro'
]);
Route::post('auth/registrar',[
    'uses' => 'Auth\AuthController@registrar',
    'as' => 'registrar'
]);

//Rutas para panel administrativo
Route::get('admin/panel/index',
    [
        'middleware' => 'auth', function(){
            return view('admin.panel.index');
        },
        'as' => 'panel'
    ]
);

