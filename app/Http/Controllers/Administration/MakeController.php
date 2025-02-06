<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Make;
use View;
use Redirect;

class MakeController extends Controller
{
	private $model = 'make';
	private $models = 'makes';
	private $select = array('*', 'make AS title');

	public function __construct()
	{
		//$this->middleware('auth');

		View::share('model', $this->model);
		View::share('models', $this->models);	
		View::share('Fields', Make::Fields());	
	}

	public function index()
	{


		$Makes = Make::get();

		foreach($Makes as $Make)
		{

			echo $Make->make . '<br>';

			foreach($Make->Cars as $Car)
			{
				echo $Car->brand . '<br>';
			}
			echo '<br>';

		}

		die();

		View::share('title', 'Makes');
		View::share('Items', Make::select( $this->select )->get());
		
		return view ('administration.items');
	}
	
	public function create()
	{
		View::share('title', 'Add Make');
		return view ('administration.create-item');
	}

	public function store(Request $request)
	{
		Make::create($request->all());		
		return Redirect::to('administration/makes');
	}

	public function edit($id)
	{
		View::share('title', 'Edit Make');
		View::share('Item', Make::find($id));

		return view ('administration.edit-item');
	}

	public function update(Request $request)
	{
		$Make = Make::find($request->id);
		$Make->update($request->all());

		return Redirect::to('administration/makes');
	}		    
}

