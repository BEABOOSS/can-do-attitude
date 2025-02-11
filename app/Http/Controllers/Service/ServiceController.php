<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use Illuminate\View\view;

class ServiceController extends Controller
{
	public function index()
	{
		return view ('home.home');
	}
	
    
}
