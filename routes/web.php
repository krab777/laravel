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

Auth::routes();

Route::get('/files', 'Dashboard\Files\FileController@index')->name('files.index');

Route::name('dashboard.')
    ->prefix('dashboard')
    ->group(function () {        

        Route::view('/', 'dashboard.index')->middleware('role:admin|moderator');
        // Route::view('/', 'dashboard.index');

        Route::resource('users', 'UserController')->middleware('role:admin');
        // Route::resource('users', 'UserController');

        Route::resource('items', 'ItemController')->middleware('role:admin|moderator');
        Route::get('/items', 'ItemController@getAll')->name('watchItems');
        Route::get('/item/{id}', 'ItemController@getOneItem')->name('getOneItem');

        Route::resource('orders', 'OrderController')->middleware('role:admin|moderator');        
        Route::get('/orders', "OrderController@getAll")->name('orders');
        Route::get('/orders/{id}', "OrderController@show")->name('order');

});

Route::name('api.')
    ->prefix('api')
    ->group(function () {  

        Route::get('{any}', function () {
            return view('app');
        })->where('any', '.*');

});

Route::get('/about', "AboutController@index")->name('about');

Route::resource('/cart', 'CartController')->middleware('auth');

Route::get('/add-to-cart/{id}', "CartController@addToCart")->name('addToCart')->middleware('auth');

Route::get('/add-to-order', "OrderController@addToOrder")->name('addToOrder')->middleware('auth');

Route::get('/orders', "OrderController@index")->name('orders')->middleware('auth');

Route::get('/', "ItemController@index")->name('homePage');

Route::get('/item/{id}', "ItemController@show")->name('item');






// Route::get('/add-to-cart/{id}', "CartController@addToCart")->name('item.addToCart');



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





// Route::get('dashboard/users', "UserController@index")->name('dashboard.users.index');

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->name('dashboard');

// Route::get('dashboard/users/', "UserController@index")->name('dashboard.users.index');
// Route::get('dashboard/users/create', "UserController@create")->name('dashboard.users.create');
// Route::post('dashboard/users/{id}', 'UserController@store')->name('dashboard.users.store');

// Route::get('dashboard/users/{id}', "UserController@show")->name('dashboard.users.show');

// Route::get('dashboard/users/{id}/edit', 'UserController@edit')->name('dashboard.users.edit');
// Route::PATCH('dashboard/users/{id}', 'UserController@update')->name('dashboard.users.update');
// Route::delete('dashboard/users/{id}', 'UserController@destroy')->name('dashboard.users.destroy');




