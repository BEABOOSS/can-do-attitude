<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Item\BookController;
use App\Http\Controllers\Item\LevelController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Administration\AdministrationController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('home',[HomeController::class,'index'])->name('home');
Route::get('service',[ServiceController::class,'index'])->name('service');
Route::get('administration',[AdministrationController::class,'index'])->name('administration');

Route::get('books',[BookController::class,'index'])->name('books');
// Route::get('book',[BookController::class,'index'])->name('book');

Route::get('levels',[LevelController::class,'index'])->name('levels');
Route::get('level/books/{id}',[LevelController::class,'levelBooks']);
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'doLogin']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');



@include('resources.php');
@include('posts.php');