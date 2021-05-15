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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'Frontend\frontendcontroller@index')->name('home');


Route::prefix('sliders')->group(function(){

	//Route::get('/view', 'ledger\LedgerController@view')->name('sliders.view');
	Route::get('/viewer', 'ledger\LedgerController@viewer')->name('sliders.viewer');
	Route::get('/add', 'ledger\LedgerController@add')->name('sliders.add');
	Route::post('/store', 'ledger\LedgerController@store')->name('sliders.store');
	Route::get('/edit/{id?}', 'ledger\LedgerController@edit')->name('sliders.edit');
	Route::post('/upadate/{id?}', 'ledger\LedgerController@update')->name('sliders.update');
	Route::get('/delete/{id?}', 'ledger\LedgerController@delete')->name('sliders.delete');
});