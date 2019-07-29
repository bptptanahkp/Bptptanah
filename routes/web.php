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

Route::resource('','UserController');
Route::get('/hasilpesan/{id}','UserController@hasilpesan');
Route::get('/hasilpesan/{id}/cetakpesan_pdf','UserController@cetak_pdf');

Route::get('login','AuthController@login')->name('login');
Route::post('postlogin','AuthController@postlogin');
Route::get('logout','AuthController@logout');


Route::group(['middleware' => 'auth'],function(){
    Route::resource('admin', 'AdminController');
    Route::resource('tarifanalisiskimia', 'AnalisisKimiaController');
    Route::post('CariTarifAnkimtan', 'AnalisisKimiaController@cariTarif');
    Route::resource('tarifpupukkimia', 'PupukkimiaController');
    Route::resource('tarifpupukorganik', 'PupukOrganik_Kompos_CairController');
    Route::resource('tarifpengujianair', 'PengujianAirController');
    Route::resource('tariftanaman', 'TanamanController');
    Route::resource('peraturanpelanggan', 'PeraturanPelangganController');
    Route::resource('ketentuanminimal', 'Ketentuan_MinController');

});
