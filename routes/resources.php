<?php

Route::resource('administration/makes', 'App\Http\Controllers\Administration\MakeController');
Route::resource('administration/cars', 'App\Http\Controllers\Administration\CarController');
Route::resource('administration/services', 'App\Http\Controllers\Administration\ServiceController');
Route::resource('administration/books', 'App\Http\Controllers\Administration\BookController');
Route::resource('administration/levels', 'App\Http\Controllers\Administration\LevelController');
Route::resource('administration/customers', 'App\Http\Controllers\Administration\CustomerController');
Route::resource('administration/companies', 'App\Http\Controllers\Administration\CompanyController');
Route::resource('administration/customer-margins', 'App\Http\Controllers\Administration\CustomerMarginController');
Route::resource('administration/students', 'App\Http\Controllers\Administration\StudentController');
Route::resource('administration/teachers', 'App\Http\Controllers\Administration\TeacherController');
Route::resource('administration/monitors', 'App\Http\Controllers\Administration\MonitorController');
Route::resource('administration/computers', 'App\Http\Controllers\Administration\ComputerController');
