<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use View;
use Redirect;

class StudentController extends Controller
{
	private $model = 'student';
	private $models = 'students';
	private $select = array('*', 'name AS title');
	private $addItem = true;

	public function __construct()
	{
		//$this->middleware('auth');

		View::share('model', $this->model);
		View::share('models', $this->models);	
		View::share('Fields', Student::Fields());	
		
	}

	public function index()
	{
		//$Cars = Car::active();
		//foreach($Cars as $Car)
		//{
		//	echo $Car->Make->make . ' ' .  $Car->brand . '<br>';
		//}
		//die();

		View::share('title', 'Students');
		View::share('Items', Student::select( $this->select )->get());
		View::share('addItem', $this->addItem);
		return view ('administration.items');
	}
	
	public function create()
	{
		View::share('title', 'Add Student');
		
		return view ('administration.create-item');
	}

	public function store(Request $request)
	{
		Student::create($request->all());		

		return Redirect::to('administration/students');
	}

	public function edit($id)
	{
		View::share('title', 'Edit Student');
		
		View::share('Item', Student::find($id));
	
		return view ('administration.edit-item');
	}

	public function update(Request $request)
	{

		$Student = Student::find($request->id);
		
		$Student->update($request->all());
		

		return Redirect::to('administration/students');
	}		    
}

