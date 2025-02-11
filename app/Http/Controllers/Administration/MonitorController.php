<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Monitor;
use View;
use Redirect;

class MonitorController extends Controller
{
	private $model = 'monitor';
	private $models = 'monitors';
	private $select = array('*', 'monitor AS title');
	private $addItem = true;

	public function __construct()
	{
		//$this->middleware('auth');

		View::share('model', $this->model);
		View::share('models', $this->models);	
		View::share('Fields', Monitor::Fields());	
		
	}

	public function index()
	{
		//$Cars = Car::active();
		//foreach($Cars as $Car)
		//{
		//	echo $Car->Make->make . ' ' .  $Car->brand . '<br>';
		//}
		//die();

		View::share('title', 'Monitors');
		View::share('Items', Monitor::select( $this->select )->get());
		View::share('addItem', $this->addItem);
		return view ('administration.items');
	}
	
	public function create()
	{
		View::share('title', 'Add Monitor');
		
		return view ('administration.create-item');
	}

	public function store(Request $request)
	{
		Monitor::create($request->all());		

		return Redirect::to('administration/monitors');
	}

	public function edit($id)
	{
		View::share('title', 'Edit Monitor');
		
		View::share('Item', Monitor::find($id));
	
		return view ('administration.edit-item');
	}

	public function update(Request $request)
	{

		$Monitor = Monitor::find($request->id);
		
		$Monitor->update($request->all());
		

		return Redirect::to('administration/monitors');
	}		    
}

