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
Route::get('hasilpesan/{id}','PesanController@hasilpesan');
Route::get('hasilpesan/{id}/cetakpesan_pdf','PesanController@cetak_pdf');

Route::get('login','AuthController@login')->name('login');
Route::post('postlogin','AuthController@postlogin');
Route::get('logout','AuthController@logout');


Route::group(['middleware' => ['auth','checkRole:superadmin']],function(){
    Route::get('superadmin', 'SuperadminController@admin');
    Route::get('supertarifanalisiskimia', 'SuperadminController@analisiskimia');
        Route::post('tambahanalisiskimia','SuperadminController@tambahanalisiskimia');
        Route::get('editanalisiskimia/{id}/edit','SuperadminController@editanalisiskimia');
        Route::post('updateanalisiskimia','SuperadminController@updateanalisiskimia');
        Route::get('hapusanalisiskimia/{id}/hapus','SuperadminController@hapusanalisiskimia');
    Route::get('supertarifpupukkimia', 'SuperadminController@pupukkimia');
        Route::post('tambahpupukkimia','SuperadminController@tambahpupukkimia');
        Route::get('editpupukkimia/{id}/edit','SuperadminController@editpupukkimia');
        Route::post('updatepupukkimia','SuperadminController@updatepupukkimia');
        Route::get('hapuspupukkimia/{id}/hapus','SuperadminController@hapuspupukkimia');
    Route::get('supertarifpupukorganik', 'SuperadminController@pupukorganik');
        Route::post('tambahpupukorganik','SuperadminController@tambahpupukorganik');
        Route::get('editpupukorganik/{id}/edit','SuperadminController@editpupukorganik');
        Route::post('updatepupukorganik','SuperadminController@updatepupukorganik');
        Route::get('hapuspupukorganik/{id}/hapus','SuperadminController@hapuspupukorganik');
    Route::get('supertarifpengujianair', 'SuperadminController@pengujianair');
        Route::post('tambahpengujianair','SuperadminController@tambahpengujianair');
        Route::get('editpengujianair/{id}/edit','SuperadminController@editpengujianair');
        Route::post('updatepengujianair','SuperadminController@updatepengujianair');
        Route::get('hapuspengujianair/{id}/hapus','SuperadminController@hapuspengujianair');
    Route::get('supertariftanaman', 'SuperadminController@tanaman');
        Route::post('tambahtanaman','SuperadminController@tambahtanaman');
        Route::get('edittanaman/{id}/edit','SuperadminController@edittanaman');
        Route::post('updatetanaman','SuperadminController@updatetanaman');
        Route::get('hapustanaman/{id}/hapus','SuperadminController@hapustanaman');
    Route::get('superperaturanpelanggan', 'SuperadminController@peraturanpelanggan');
        Route::post('tambahperaturan','SuperadminController@tambahperaturan');
        Route::get('editperaturan/{id}/edit','SuperadminController@editperaturan');
        Route::post('updateperaturan','SuperadminController@updateperaturan');
        Route::get('hapusperaturan/{id}/hapus','SuperadminController@hapusperaturan');
    Route::get('superketentuanminimal', 'SuperadminController@ketentuanminimal');
        Route::post('tambahketentuan','SuperadminController@tambahketentuan');
        Route::get('editketentuan/{id}/edit','SuperadminController@editketentuan');
        Route::post('updateketentuan','SuperadminController@updateketentuan');
        Route::get('hapusketentuan/{id}/hapus','SuperadminController@hapusketentuan');
    //record pesan
    Route::get('superdatapesan','SuperadminController@datapesan')->name('superdatapesan.index');
    Route::get('superdatapesan.{datapesan}/change-status', 'SuperadminController@getStatus')->name('superdatapesan.getStatus');
    Route::put('superdatapesan.{datapesan}', 'SuperadminController@changeStatus')->name('superdatapesan.changeStatus');
    Route::get('superdatapermintaan','SuperadminController@datapermintaan');

    //lihatproses
    
    
    Route::get('supersaran', 'SuperadminController@saran');
    
});

Route::group(['middleware' => ['auth','checkRole:admin']],function(){
    Route::resource('admin', 'AdminController');
    Route::resource('tarifanalisiskimia', 'AnalisisKimiaController');
    Route::resource('tarifpupukkimia', 'PupukkimiaController');
    Route::resource('tarifpupukorganik', 'PupukOrganik_Kompos_CairController');
    Route::resource('tarifpengujianair', 'PengujianAirController');
    Route::resource('tariftanaman', 'TanamanController');
    Route::resource('peraturanpelanggan', 'PeraturanPelangganController');
    Route::resource('ketentuanminimal', 'Ketentuan_MinController');
    //record pesan
    Route::get('datapesan','PesanController@datapesan')->name('datapesan.index');
    Route::get('datapesan.{datapesan}/change-status', 'PesanController@getStatus')->name('datapesan.getStatus');
    Route::put('datapesan.{datapesan}', 'PesanController@changeStatus')->name('datapesan.changeStatus');
    Route::get('datapermintaan','PesanController@datapermintaan');

    //lihatproses
    
    
    Route::resource('saran', 'SaranController');
    
});

Route::get('lihatproses','PesanController@lihatproses');