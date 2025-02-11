<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use View;
use Redirect;

class TeacherController extends Controller
{
	private $model = 'teacher';
	private $models = 'teachers';
	private $select = array('*', 'teacher AS title');
	private $addItem = true;

	public function __construct()
	{
		//$this->middleware('auth');

		View::share('model', $this->model);
		View::share('models', $this->models);	
		View::share('Fields', Teacher::Fields());	
	}

	public function index()
	{

		View::share('title', 'Teachers');
		View::share('Items', Teacher::select( $this->select )->get());
		View::share('addItem', $this->addItem);
		return view ('administration.items');
	}
	
	public function create()
	{
		View::share('title', 'Add Teacher');
		return view ('administration.create-item');
	}

	public function store(Request $request)
	{
		Teacher::create($request->all());		
		return Redirect::to('administration/teachers');
	}

	public function edit($id)
	{
		View::share('title', 'Edit Teacher');
		View::share('Item', Teacher::find($id));

		return view ('administration.edit-item');
	}

	public function update(Request $request)
	{
		$Teacher= Teacher::find($request->id);
		$Teacher->update($request->all());

		return Redirect::to('administration/teachers');
	}		    
}

