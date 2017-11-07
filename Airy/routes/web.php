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

Route::get('case','CaseController@index')->name('case.index');
Route::get('case/create','CaseController@index')->name('case.create');
Route::get('case/store','CaseController@store')->name('case.store');
Route::get('case/show/{case}','CaseController@show')->name('case.show');
Route::get('case/edit','CaseController@edit')->name('case.edit');
Route::get('case/update/{case}','CaseController@update')->name('case.update');
Route::get('case/destroy/{case}','CaseController@destroy')->name('case.destroy');

Route::resource('donate','DonateController');
