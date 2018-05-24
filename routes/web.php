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

Route::group(['middleware'=>'check'],function() {
	Route::get('/logged','PermohonanSuratController@show');
	Route::get('/keperluansurat','KeperluanSuratController@index');
	Route::get('/logout','MahasiswaController@logout');
	Route::get('/formsurat','PermohonanSuratController@index');
	Route::get('/lihatpermohonan','PermohonanSuratController@show');
	Route::get('/print/{id}', 'PermohonanSuratController@print');
	Route::get('/viewadmin', 'PermohonanSuratController@showadmin');
});

Route::group(['middleware'=>'logged'],function() {
	Route::get('/', function () {
	    return view('login');
	});
	Route::get('/login', function(){
		return view('login');
	});
	Route::get('/register', function () {
	    return view('register');
	});
});

Route::post('mhsaction','MahasiswaController@store');
Route::post('login','MahasiswaController@login');
Route::post('permohonan','PermohonanSuratController@store');
