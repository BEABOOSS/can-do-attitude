<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CustomerMargin;
use App\Models\Customer;
use View;
use Redirect;
use Session;


class CustomerMarginController extends Controller
{
	private $model = 'customer-margin';
	private $models = 'customer-margins';
	private $select = array('*', 'customer AS title');
	private $addItem = true;

	public function __construct()
	{
		//$this->middleware('auth');

		View::share('model', $this->model);
		View::share('models', $this->models);	
		View::share('Fields', CustomerMargin::Fields());	
	}

	public function index()
	{

		// echo 'CUSTOMER ID:' . Session::get('CustomerId') . '<br>';

		// $CustomerMargins = CustomerMargin::where('customer_id', Session::get('CustomerId'))->get();
		// foreach ($CustomerMargins as $CustomerMargin)
		// {
		// 	print_r( $CustomerMargin->toArray() );
		// 	echo '<br><br>';
		// }

		// die();

		$Items = View::share('Items', CustomerMargin::where('customer_id', Session::get('CustomerId'))
			                                        ->select( $this->select )
			                                        ->get());

		if ( count($Items) > 0 ) { $this->addItem = false; }

		//echo count($Items) . ' ' . $this->addItem;
		//die();

		View::share('title', 'Customer Margin');
		View::share('Items', $Items);
		View::share('addItem', $this->addItem);
		
		return view ('administration.items');
	}
	
	public function create()
	{
		View::share('title', 'Add Customer Margin');
		return view ('administration.create-item');
	}

	public function store(Request $request)
	{
		$Customer = Customer::find($request->customer_id);
		$request->merge(['customer' => $Customer->customer]);	
		CustomerMargin::create($request->all());		
		return Redirect::to('administration/customer-margins');
	}

	public function edit($id)
	{
		View::share('title', 'Edit Customer Margin');
		View::share('Item', CustomerMargin::find($id));

		return view ('administration.edit-item');
	}

	public function update(Request $request)
	{
		$Customer = Customer::find($request->customer_id);
		$request->merge(['customer' => $Customer->customer]);	
		$Make = CustomerMargin::find($request->id);
		$Make->update($request->all());

		return Redirect::to('administration/customer-margins');
	}		    
}

