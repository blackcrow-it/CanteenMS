<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts/{id}', 'PostController@show');

Route::get('/admin/phieu-mua-hang', 'BillController@index');
Route::post('/admin/phieu-mua-hang/add', [
		'as' => 'addBill',
		'uses' => 'BillController@create'
	]);