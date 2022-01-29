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
//     return view('in');
// });

Route::get('/', 'App\Http\Controllers\mainController@index');
Route::get('login', 'App\Http\Controllers\mainController@login');
Route::get('register', 'App\Http\Controllers\mainController@register');
Route::get('main', 'App\Http\Controllers\mainController@main');
Route::get('profile', 'App\Http\Controllers\mainController@profile');
Route::get('personaldata', 'App\Http\Controllers\mainController@pdata');
Route::get('beneficiaries', 'App\Http\Controllers\mainController@benefit');
Route::get('proffession', 'App\Http\Controllers\mainController@designation');
Route::post('checklogin', 'App\Http\Controllers\loginController@checkLogin');
Route::get('logout', 'App\Http\Controllers\loginController@logout');
// Auth::routes();
Route::get('edit-personaldata', 'App\Http\Controllers\mainController@editpdata');
Route::get('edit-beneficiaries', 'App\Http\Controllers\mainController@editbenefit');
Route::get('edit-proffession', 'App\Http\Controllers\mainController@editdesignation');

//Users Functions
Route::post('set-personaldata', 'App\Http\Controllers\userController@editpdata');
Route::post('set-beneficiaries', 'App\Http\Controllers\userController@editbenefit');
Route::post('set-proffession', 'App\Http\Controllers\userController@editdesignation');