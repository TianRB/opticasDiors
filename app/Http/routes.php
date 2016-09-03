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
// Nuestra Empresa
Route::get('/', 'WelcomeController@index');
Route::get('/quienessomos', 'WelcomeController@quienessomos');
Route::get('/misionvision', 'WelcomeController@misionvision');

// Salud Visual
Route::get('/saludvisual', 'WelcomeController@saludvisual');

// Servicios
Route::get('/servicios', 'WelcomeController@servicios');

/*
Route::get('/examendelavista', 'WelcomeController@examendelavista');
Route::get('/oftalmologico', 'WelcomeController@oftalmologico');
Route::get('/contactologia', 'WelcomeController@contactologia');
Route::get('/laboratoriooptico', 'WelcomeController@laboratoriooptico');
Route::get('/hospitaldeanteojos', 'WelcomeController@hospitaldeanteojos');
Route::get('/seguridadindustrial', 'WelcomeController@seguridadindustrial');
Route::get('/garantias', 'WelcomeController@garantias');
Route::get('/opticamovil', 'WelcomeController@opticamovil');
*/

// Productos
Route::get('/lentes', 'WelcomeController@lentes');
Route::get('/armazones', 'WelcomeController@armazones');

/*
Route::get('/monofocal', 'WelcomeController@monofocal');
Route::get('/bifocal', 'WelcomeController@bifocal');
Route::get('/antirreflejante', 'WelcomeController@antirreflejante');
Route::get('/progresivo', 'WelcomeController@progresivo');
Route::get('/materiales', 'WelcomeController@materiales');
Route::get('/diseño', 'WelcomeController@diseño');
Route::get('/tratamiento', 'WelcomeController@tratamiento');
Route::get('/lentesdecontacto', 'WelcomeController@lentesdecontacto');
Route::get('/armazonesdelinea', 'WelcomeController@armazonesdelinea');
Route::get('/armazonesdepromocion', 'WelcomeController@armazonesdepromocion');
*/

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
