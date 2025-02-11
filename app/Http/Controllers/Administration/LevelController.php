<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Level;
use View;
use Redirect;

class LevelController extends Controller
{
	private $model = 'level';
	private $models = 'levels';
	private $select = array('*', 'level AS title');
	private $addItem = true;

	public function __construct()
	{
		//$this->middleware('auth');

		View::share('model', $this->model);
		View::share('models', $this->models);	
		View::share('Fields', Level::Fields());	
	}

	public function index()
	{


		// $Levels = Level::get();

		// foreach($Levels as $Level)
		// {

		// 	echo $Level->level . '<br>';

		// 	foreach($Level->Books as $Book)
		// 	{
		// 		echo $Book->name . '<br>';
		// 	}
		// 	echo '<br>';

		// }

		// die();

		View::share('title', 'Levels');
		View::share('Items', Level::select( $this->select )->get());
		View::share('addItem', $this->addItem);
		return view ('administration.items');
	}
	
	public function create()
	{
		View::share('title', 'Add Level');
		return view ('administration.create-item');
	}

	public function store(Request $request)
	{
		Level::create($request->all());		
		return Redirect::to('administration/levels');
	}

	public function edit($id)
	{
		View::share('title', 'Edit Level');
		View::share('Item', Level::find($id));

		return view ('administration.edit-item');
	}

	public function update(Request $request)
	{
		$Make = Level::find($request->id);
		$Make->update($request->all());

		return Redirect::to('administration/levels');
	}		    
}

