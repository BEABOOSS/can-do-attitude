<?php

namespace App\Http\Controllers\Item;

use Illuminate\Http\Request;
use View;
use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
	
	public function index()
	{
		View::share('title', 'Book');
		View::share('Books', Book::active());
		
		return view('books.books');
	}
	
    
}
