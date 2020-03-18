<?php

use Illuminate\Support\Facades\Route;

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
	// $data = request()
    return view('welcome');
});


Route::get('/first_page_view', function () {
	$hello = request('hello');

    return view('first_page', compact('hello'));
});

Route::get('/first_page', function () {
    return 'first_page';
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('users/{name?}', function ($name = 'Usual Name') {
    return $name;
});


