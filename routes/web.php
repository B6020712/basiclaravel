<?php

use Illuminate\Support\Facades\Route;
// in KongRakSiam's does not import HelloController
// use App\Http\Controllers\HelloController;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () { return view('welcome');});
Route::resource('/user', UsersController::class);
// Route::get('users', function () { return '<h1>Users founded!</h1>';});
// Route::get('/welcome/name', [HelloController::class, 'showHello']);
// Route::get('/showname/{name}', [HelloController::class, 'showHello']);
// Route::get('/showproduct/{product_name}', [HelloController::class, 'showResultProduct']);
// Route::get('/home', function () { return view('home');});
// Route::get('/edit', function () { return view('edit');});
// Route::get('/create', function () { return view('create');});
// Route::get('/show', [HelloController::class, 'show']);