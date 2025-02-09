<?php 

use App\Http\Controllers\Administration\CustomerController;

Route::post('set-customer-id',[CustomerController::class,'setCustomerId']);