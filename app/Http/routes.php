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

/*
|--------------------------------------------------------------------------
| Rutas Públicas
|--------------------------------------------------------------------------
*/

// Landing Page
Route::get('/', 'WelcomeController@index');

// Nuestra Empresa
Route::get('/quienessomos', 'WelcomeController@quienessomos');
Route::get('/misionvision', 'WelcomeController@misionvision');

// Salud Visual
Route::get('/saludvisual', 'WelcomeController@saludvisual');

// Servicios
Route::get('/servicios', 'WelcomeController@servicios');

// Productos
Route::get('/lentes', 'WelcomeController@lentes');
Route::get('/armazones', 'WelcomeController@armazones');

// Promociones
Route::get('promociones', 'WelcomeController@promociones');

// Convenios
Route::get('convenios', 'WelcomeController@convenios');

// Sucursal
Route::get('sucursal', 'WelcomeController@sucursal');
/*
|--------------------------------------------------------------------------
| Rutas Privadas - Requieren Login
|--------------------------------------------------------------------------
*/
// Dashboard
Route::get('home', 'HomeController@index');

// Resource - Promocion
Route::resource('promo', 'PromocionesController');

/*
|--------------------------------------------------------------------------
| Rutas Internas - NO CAMBIAR a menos que sepas exactamente lo que haces
|--------------------------------------------------------------------------
*/
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
