<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use View;
use App\Http\Controllers\Controller;


class AdministrationController extends Controller
{
	public function index()
	{
		View::share('title', 'Administration');
		return view ('administration.administration');
	}


}
