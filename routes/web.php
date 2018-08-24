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
Route::post('/admin/thong-tin/edit/img', 'InfoController@editImage')->name('editImage');
Route::post('/admin/thong-tin/edit/text/email', 'InfoController@editEmail');
Route::post('/admin/thong-tin/edit/text/sdt', 'InfoController@editNumberPhone');
Route::post('/admin/thong-tin/edit/text/dia-chi', 'InfoController@editAddress');
Route::get('/admin/thay-doi-mat-khau','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Route::get('/admin/san-pham', 'ProductManage@index');

Route::post('/admin/san-pham/add',[
	'as'   => 'addProduct',
	'uses' => 'ProductManage@create'
]);

Route::get('/admin/danh-sach-san-pham', 'ProductManage@show');
Route::get('/admin/edit/{alias}', 'ProductManage@getEdit');
Route::post('/admin/edit', 'ProductManage@doEdit')->name('product.edit');
Route::get('/admin/delete/{alias}', 'ProductManage@doDelete');

Route::get('/admin/phieu-mua-hang', 'BillController@index');
Route::post('/admin/phieu-mua-hang/add', [
		'as' => 'addBill',
		'uses' => 'BillController@create'
	]);

Route::get('admin/danh-sach-hoa-don', [
		'as' => 'listBill',
		'uses' => 'BillController@list'
	]);

Route::get('admin/danh-sach-hoa-don/{id}', 'BillController@show');

//....
Route::get('/admin/them-nhan-vien', 'EmployeeController@index');

Route::post('/admin/them-nhan-vien/add',[
	'as'   => 'addEmployee',
	'uses' => 'EmployeeController@create'
]);
Route::get('/admin/danh-sach-nhan-vien', 'EmployeeController@show');
Route::get('/admin/{ten_tai_khoan}', 'EmployeeController@show_detail');
Route::get('/admin/Employee/edit/{ten_tai_khoan}', 'EmployeeController@getEdit');
Route::post('/admin/Employee/edit', 'EmployeeController@doEdit')->name('Employee.edit');
Route::get('/admin/Employee/delete/{ten_tai_khoan}', 'EmployeeController@doDelete');