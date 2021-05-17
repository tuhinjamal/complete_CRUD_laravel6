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

Route::group(['middleware'=>'test'],function({

		Route::prefix('ledgermodel')->group(function(){

		//Route::get('/view', 'ledger\LedgerController@view')->name('sliders.view');
		Route::get('/master', 'ledger\ledger@master')->name('ledgermodel.master');
		Route::get('/viewer', 'ledger\ledger@viewer')->name('ledgermodel.viewer');
		Route::get('/add', 'ledger\ledger@add')->name('ledgermodel.add');
		Route::post('/store', 'ledger\ledger@store')->name('ledgermodel.store');
		Route::get('/edit/{id?}', 'ledger\ledger@edit')->name('ledgermodel.edit');
		Route::post('/upadate/{id?}', 'ledger\ledger@update')->name('ledgermodel.update');
		Route::get('/delete/{id?}', 'ledger\ledger@delete')->name('ledgermodel.delete');
	});

});
