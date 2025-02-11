<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class AdminController extends Controller
{

    public $addItem = true;

    public function __construct()
    {
        View::share('addItem', $this->addItem);
    }

}
