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

Route::prefix('admin')->group(function() {
	
	Route::get('/employees/delete', 'EmployeeController@showEmployeeDeleteForm')->name('admin.employee.selectfordelete');

	Route::delete('/employees', 'EmployeeController@delete')->name('admin.employee.delete');

	Route::get('/employees/create', 'EmployeeController@showEmployeeForm')->name('admin.employee.create');
	
	Route::get('/employee/select', 'EmployeeController@selectEmployee')->name('admin.employee.select');

	Route::post('/employees', 'EmployeeController@store')->name('admin.employee.submit');

	Route::post('/employee/edit', 'EmployeeController@showEmployeeEditForm')->name('admin.employee.edit');

	Route::put('/employees', 'EmployeeController@update')->name('admin.employee.update');
	
	Route::get('/', 'AdminController@index')->name('admin.dashboard');

});

Route::prefix('employee')->group(function() {
	
	Route::get('/', 'HomeController@index')->name('employee.dashboard');

});
