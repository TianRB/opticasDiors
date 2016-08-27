<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Promocion;
use Input;
use Image;
use Illuminate\Http\Request;

class PromocionesController extends Controller {
	
/*
Verb		Path				Action		Route Name
GET			/photo				index		photo.index
GET			/photo/create		create		photo.create
POST		/photo				store		photo.store
GET			/photo/{photo}		show		photo.show
GET			/photo/{photo}/edit edit		photo.edit
PUT/PATCH	/photo/{photo}		update		photo.update
DELETE		/photo/{photo}		destroy		photo.destroy
*/
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Aqui se tomaban todas, en welcomeController iba esto. Ups
		$p = Promocion::all();
		//dd($p);
		return view('home.promociones.promociones', ['promocion' => $p]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('home.promociones.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $r)
	{
		$this->validate($r, [
			'img' 	=> 'max:512|required|image',
			'title' => 'required'
		]);
		
		$imgName = str_random(10).'.'.Input::file('img')->getClientOriginalExtension();
		$image = Image::make(Input::file('img'));
		$image->save('img/uploads/promociones/'.$imgName);
		
		$p = new Promocion;
		$p->img = 'img/uploads/promociones/'.$imgName;
		$p->title = $r->title;
		$p->valid = ($r->valid === "" ? true : false);
		$p->save();
		
		return redirect('promo');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
