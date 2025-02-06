<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use View;
use App\Http\Controllers\Controller;
use App\Models\Service;

class HomeController extends Controller
{
	public function index()
	{
		View::share('title', 'Home');
		View::share('Services', Service::active());
		
		return view('home.home');
	}
	
    
}
