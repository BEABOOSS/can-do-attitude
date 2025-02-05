<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;
use View;
use Redirect;

class CarController extends Controller
{
	private $model = 'car';
	private $models = 'cars';
	private $select = array('*', 'brand AS title');

	public function index()
	{
		//cho 'INDEX';
		//die();

		View::share('title', 'Cars');
		View::share('model', $this->model);
		View::share('models', $this->models);
		View::share('Items', Car::select( $this->select )->get());
		View::share('Fields', Car::Fields());
		return view ('administration.items');
	}
	
	public function create()
	{
		View::share('title', 'Add Car');
		View::share('model', $this->model);
		View::share('models', $this->models);
		View::share('Fields', Car::Fields());

		return view ('administration.create-item');
	}

	public function store(Request $request)
	{
		Car::create($request->all());		

		return Redirect::to('administration/cars');
	}

	public function edit($id)
	{
		View::share('title', 'Edit Car');
		View::share('model', $this->model);
		View::share('models', $this->models);
		View::share('Item', Car::find($id));
		View::share('Fields', Car::Fields());

		return view ('administration.edit-item');
	}

	public function update(Request $request)
	{
		//print_r($request->toArray());
		//echo '<br><br>';

		$Car = Car::find($request->id);
		//print_r($Car->toArray());
		//echo '<br><br>';



		$Car->update($request->all());
		//print_r($Car->toArray());
		//echo '<br><br>';



		return Redirect::to('administration/cars');
	}		    
}

