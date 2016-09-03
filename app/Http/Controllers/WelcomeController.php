<?php namespace App\Http\Controllers;
use App\Promocion;

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
		$p = Promocion::where('valid', 1) // Tomar promociones con valid === 1
               ->orderBy('created_at') // Ordenar por fecha de creación
               ->take(4) // Tomar cuatro
               ->get();
               //dd($p); // Descomentar para interrumpir script y mostrar contenido de $p
		
		return view('welcome', ['promocion' => $p]);
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

	public function servicios()
	{
		return view('servicios.servicios');
	}

	public function lentes()
	{
		return view('productos.lentes');
	}	
	public function armazones()
	{
		return view('productos.armazones');
	}	

	public function promociones()
	{
		return view('promociones.promociones');
	}	
	public function convenios()
	{
		return view('convenios.convenios');
	}	

	public function sucursal()
	{
		return view('sucursal.maps.todas');
	}	
}
