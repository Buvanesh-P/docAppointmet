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
    if (!session()->has('auth'))
    {
        return redirect('login');
    }
    else redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('doctors', 'UserController@index');
Route::view('appointment', 'doctor');
Route::post('appointment', 'UserController@store');
Route::get('userAppointments','UserController@show');
Route::get('docAppointments','DocController@show');
Route::view('myAppointments', 'myAppointments');
