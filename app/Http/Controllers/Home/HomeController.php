<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\View\view;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function index()
	{
		return view ('home.home');
	}
	
    
}
