<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use View;
use Redirect;

class CompanyController extends Controller
{
	private $model = 'company';
	private $models = 'companies';
	private $select = array('*', 'company AS title');

	public function __construct()
	{
		//$this->middleware('auth');

		View::share('model', $this->model);
		View::share('models', $this->models);	
		View::share('Fields', Company::Fields());	
	}

	public function index()
	{

		View::share('title', 'Companies');
		View::share('Items', Company::select( $this->select )->get());
		
		return view ('administration.items');
	}
	
	public function create()
	{
		View::share('title', 'Add Company');
		return view ('administration.create-item');
	}

	public function store(Request $request)
	{
		Company::create($request->all());		
		return Redirect::to('administration/companies');
	}

	public function edit($id)
	{
		View::share('title', 'Edit Company');
		View::share('Item', Company::find($id));

		return view ('administration.edit-item');
	}

	public function update(Request $request)
	{
		$Make = Company::find($request->id);
		$Make->update($request->all());

		return Redirect::to('administration/companies');
	}		    
}

