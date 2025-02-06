<?php

namespace App\Http\Controllers\Item;

use Illuminate\Http\Request;
use View;
use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\Book;

class LevelController extends Controller
{
	
	public function index()
	{
		// sets page titles
		View::share('title', 'Levels');
		// get items from db
		View::share('Levels', Level::active());

		
		return view('levels.levels');
	}

	public function levelBooks($id)
	{
		$Books = Book::where('levelId', $id)->get();
		foreach ($Books as $Book) {
			echo $Book->name . '<br>'; 
		}
		die();

		// $Books = Book::get();
		// sets page titles
		View::share('title', 'Level');
		// get items from db
		
		View::share('Books', Book::where('levelId', $id)->get());

		return view('levels.bookLevel');

	}
    
}
//books = [(name,id,levelId),2,3]
//books->levelId