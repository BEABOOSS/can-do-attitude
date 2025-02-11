<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Computer;
use View;
use Redirect;

class ComputerController extends Controller
{
	private $model = 'computer';
	private $models = 'computers';
	private $select = array('*', 'computer AS title');
	private $addItem = true;

	public function __construct()
	{
		//$this->middleware('auth');

		View::share('model', $this->model);
		View::share('models', $this->models);	
		View::share('Fields', Computer::Fields());	
		
	}

	public function index()
	{
		//$Cars = Car::active();
		//foreach($Cars as $Car)
		//{
		//	echo $Car->Make->make . ' ' .  $Car->brand . '<br>';
		//}
		//die();

		View::share('title', 'Computers');
		View::share('Items', Computer::select( $this->select )->get());
		View::share('addItem', $this->addItem);
		return view ('administration.items');
	}
	
	public function create()
	{
		View::share('title', 'Add Computer');
		
		return view ('administration.create-item');
	}

	public function store(Request $request)
	{
		Computer::create($request->all());		

		return Redirect::to('administration/computers');
	}

	public function edit($id)
	{
		View::share('title', 'Edit Computer');
		
		View::share('Item', Computer::find($id));
	
		return view ('administration.edit-item');
	}

	public function update(Request $request)
	{

		$Computer = Computer::find($request->id);
		
		$Computer->update($request->all());
		

		return Redirect::to('administration/computers');
	}		    
}

