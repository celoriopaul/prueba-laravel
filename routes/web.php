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




Route::redirect('/', 'employees');
Auth::routes();


//web-cliente
Route::get('employees', 'Web\PageController@emp')->name('employees');
    


Route::resource('empleados','Admin\EmployeeController');



