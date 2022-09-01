<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/signup', UserController::class);

Route::post('/signup/create', [UserController::class, 'store']);


Route::resource('/login', Login::class);

Route::post('/login/submit', [Login::class, 'login']);

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
