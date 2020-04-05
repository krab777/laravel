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

// Route::get('/', function () {
// 	// $data = request()
//     return view('welcome');
// });


// Route::get('/first_page_view', function () {
// 	$hello = request('hello');

//     return view('first_page', compact('hello'));
// });

// Route::get('/first_page', function () {
//     return 'first_page';
// });

// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });

// Route::get('users/{name?}', function ($name = 'Usual Name') {
//     return $name;
// });

// Route::get('products', "ProductController@index");

// Route::get('products/{id}', "ProductController@show");


// Route::get('news', "NewsController@get");


// Route::get('users', "UserController@index");

Route::get('/about', "AboutController@index");

Route::get('/', "ItemController@index");

Route::get('/item/{id}', "ItemController@show");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/files', 'Dashboard\Files\FileController@index')->name('files.index');

// Route::get('dashboard', "UserController@index")->name('dashboard.users.index');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('dashboard/users/', "UserController@index")->name('dashboard.users.index');
Route::get('dashboard/users/create', "UserController@create");
Route::post('dashboard/users/{id}', 'UserController@store')->name('dashboard.users.store');


Route::get('dashboard/users/{id}', "UserController@show");

Route::get('dashboard/users/{id}/edit', 'UserController@edit')->name('dashboard.users.edit');
Route::PATCH('dashboard/users/{id}', 'UserController@update')->name('dashboard.users.update');
Route::get('dashboard/users/{id}/delete', 'Dashboard\UserController@destroy')->name('dashboard.users.destroy');

Route::delete('dashboard/users/{id}', 'UserController@destroy')->name('dashboard.users.destroy');



Route::name('dashboard.')
    // ->namespace('Dashboard')
    ->prefix('dashboard')
    ->group(function () {

        Route::view('/', 'dashboard.index');

		Route::prefix('users')
            ->name('users.')
            ->group(function () {
                Route::resource('/', 'UserController');
            });

        Route::prefix('items')
            ->name('items.')
            ->group(function () {
                Route::resource('/', 'ItemController');
            });

    });

// Route::resource('dashboard/users', 'UserController');


