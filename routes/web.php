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



Route::get('myView','MyController@myView');
Route::get('test','MyController@test');
Route::get('index','MyController@index');
Route::get('truyen','MyController@truyen');
Route::get('chap1Naruto','MyController@chap1Naruto');
Route::get('chap2Naruto','MyController@chap2Naruto');
Route::get('Action','MyController@Action');
