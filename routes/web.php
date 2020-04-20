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
    return view('auth/login');
});

Route::get('google', 'GoogleController@redirect');
Route::get('google/callback', 'GoogleController@callback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route untuk content view
Route::get('/EntriJadwalDosen','EntriJadwalDosen@entriJadwalDosen')->name('entriJadwalDosen');
Route::get('/LihatJadwalDosen','LihatJadwalDOsen@lihatJadwalDosen')->name('lihatJadwalDosen');
Route::get('/PerubahanKuliahManage','PerubahanKuliahManage@perubahanKuliahManage')->name('perubahanKuliahManage');
Route::get('/PerubahanKuliahRequest','PerubahanKuliahRequest@perubahanKuliahRequest')->name('perubahanKuliahRequest');
Route::get('/TranskripManage','TranskripManage@transkripManage')->name('transkripManage');
Route::get('/TranskripRequest','TranskripRequest@transkripRequest')->name('transkripRequest');