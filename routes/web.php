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
Route::get('/admin/thong-tin', 'InfoController@index');
Route::get('/admin/thay-doi-mat-khau','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');





//.....
Route::get('/admin/them-nhan-vien', 'EmployeeManage@create');

Route::post('/admin/them-nhan-vien/add',[
	'as'   => 'addProduct',
	'uses' => 'EmployeeManage@store'
]);

Route::get('/admin/danh-sach-nhan-vien', 'EmployeeManage@show');
Route::get('/admin/edit/{chuc_cu_alias}', 'EmployeeManage@getEdit');
Route::get('/admin/{chuc_cu_alias}', 'EmployeeManage@show_detail');
Route::post('/admin/edit', 'EmployeeManage@doEdit')->name('product.edit');
Route::get('/admin/delete/{chuc_cu_alias}', 'EmployeeManage@doDelete');


//....


