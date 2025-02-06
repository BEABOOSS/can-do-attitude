<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use View;
use Redirect;

class ServiceController extends Controller
{
	private $model = 'service';
	private $models = 'services';
	private $select = array('*', 'service AS title');

	public function index()
	{
		View::share('title', 'Services');
		View::share('model', $this->model);
		View::share('models', $this->models);		
		View::share('Items', Service::select( $this->select )->get());
		View::share('Fields', Service::Fields());
		return view ('administration.items');
	}
	
	public function create()
	{
		View::share('title', 'Add Service');
		View::share('model', $this->model);
		View::share('models', $this->models);
		View::share('Fields', Service::Fields());

		return view ('administration.create-item');
	}

	public function store(Request $request)
	{
		Service::create($request->all());		

		return Redirect::to('administration/services');
	}

	public function update()
	{

	}		    
}

