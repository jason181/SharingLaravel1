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
    return view('index',['title'=>'Home']);
});
Route::get('/about', function () {
    return view('about',['title'=>'About']);
});

Route::get('/employee','EmployeeController@index');
Route::get('/employee/create','EmployeeController@create');
Route::post('/employee','EmployeeController@store');
Route::get('/employee/{employee}','EmployeeController@show');
Route::get('/employee/edit/{employee}','EmployeeController@edit');
Route::patch('/employee/{employee}','EmployeeController@update');
Route::delete('/employee/{employee}','EmployeeController@destroy');