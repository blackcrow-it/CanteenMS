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

//..........

// Route::get('admin/them-nhan-vien','themnhanvienController@show');

// Route::get('admin/danh-sach-nhan-vien','danhsachnhanvienController@show');

//Route::get('admin/thong-tin-nhan-vien','thongtinnhanvienController@show');

//.............

Route::resource('admin', 'ProductController', ['only' => [
    'create', 'store', 'edit'
]]);

Route::get('admin/danh-sach-nhan-vien','ProductController@index');

Route::get('/admin/them-nhan-vien','ProductController@create');

Route::post('/admin','ProductController@store');

Route::get('/admin/{users_id}','ProductController@show_nv');

Route::get('/admin/{users_id}/edit','ProductController@edit');

Route::post('/admin/{users_id}','ProductController@update');

Route::get('/admin/{users_id}','ProductController@destroys');