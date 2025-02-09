<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use View;
use Redirect;
use Session;

class CustomerController extends Controller
{
	private $model = 'customer';
	private $models = 'customers';
	private $select = array('*', 'customer AS title');

	public function __construct()
	{
		//$this->middleware('auth');

		View::share('model', $this->model);
		View::share('models', $this->models);	
		View::share('Fields', Customer::Fields());	
	}

	public function index()
	{

		View::share('title', 'Customers');
		View::share('Items', Customer::select( $this->select )->get());
		
		return view ('administration.items');
	}
	
	public function create()
	{
		View::share('title', 'Add Customer');
		return view ('administration.create-item');
	}

	public function store(Request $request)
	{
		Customer::create($request->all());		
		return Redirect::to('administration/customers');
	}

	public function edit($id)
	{
		View::share('title', 'Edit Customer');
		View::share('Item', Customer::find($id));

		return view ('administration.edit-item');
	}

	public function update(Request $request)
	{
		$Make = Customer::find($request->id);
		$Make->update($request->all());

		return Redirect::to('administration/customers');
	}

	public function setCustomerId(Request $request)
	{
		$Customer = Customer::find($request->id);


		Session::put('CustomerId', $request->id);
		Session::put('Customer', $Customer->toArray());


		echo '1';


	}		    
}

