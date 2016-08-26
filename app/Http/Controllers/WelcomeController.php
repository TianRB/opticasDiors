<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}


	public function index()
	{
		return view('welcome');
	}
	public function quienessomos()
	{
		return view('nuestraempresa.quienessomos');
	}
	public function misionvision()
	{
		return view('nuestraempresa.misionvision');
	}
	public function saludvisual()
	{
		return view('saludvisual.saludvisual');
	}
	public function examendelavista()
	{
		return view('servicios.examendelavista');
	}
	public function oftalmologico()
	{
		return view('servicios.oftalmologico');
	}


	public function monofocal()
	{
		return view('productos.monofocal');
	}	
	public function bifocal()
	{
		return view('productos.bifocal');
	}	
	public function antirreflejante()
	{
		return view('productos.antirreflejante');
	}	
	public function progresivo()
	{
		return view('productos.progresivo');
	}	




	public function promociones()
	{
		return view('promociones.promociones');
	}	
	public function convenios()
	{
		return view('convenios.convenios');
	}	
}
