<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use View;
use Redirect;

class BookController extends Controller
{
	private $model = 'book';
	private $models = 'books';
	private $select = array('*', 'name AS title');
	private $addItem = true;

	public function __construct()
	{
		//$this->middleware('auth');

		View::share('model', $this->model);
		View::share('models', $this->models);	
		View::share('Fields', Book::Fields());	
		
	}

	public function index()
	{
		//$Cars = Car::active();
		//foreach($Cars as $Car)
		//{
		//	echo $Car->Make->make . ' ' .  $Car->brand . '<br>';
		//}
		//die();

		View::share('title', 'Books');
		// View::share('model', $this->model);
		// View::share('models', $this->models);
		View::share('Items', Book::select( $this->select )->get());
		// View::share('Fields', Book::Fields());
		View::share('addItem', $this->addItem);
		return view ('administration.items');
	}
	
	public function create()
	{
		View::share('title', 'Add Book');
		// View::share('model', $this->model);
		// View::share('models', $this->models);
		// View::share('Fields', Book::Fields());

		return view ('administration.create-item');
	}

	public function store(Request $request)
	{
		Book::create($request->all());		

		return Redirect::to('administration/books');
	}

	public function edit($id)
	{
		View::share('title', 'Edit Book');
		// View::share('model', $this->model);
		// View::share('models', $this->models);
		View::share('Item', Book::find($id));
		// View::share('Fields', Book::Fields());

		return view ('administration.edit-item');
	}

	public function update(Request $request)
	{
		//print_r($request->toArray());
		//echo '<br><br>';

		$Book = Book::find($request->id);
		//print_r($Car->toArray());
		//echo '<br><br>';



		$Book->update($request->all());
		//print_r($Car->toArray());
		//echo '<br><br>';



		return Redirect::to('administration/books');
	}		    
}

