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
    return view('awal.awal');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['CekRole:admin']], function(){
    //admin
    Route::get('/dashboardadmin', 'AdminController@dashboardadmin')->name('dashboardadmin');
    Route::get('/menuview', 'MakananController@index')->name('menuview');
    Route::get('/user', 'AdminController@index')->name('user');

    // Crud makanan
    Route::get('/tambah', 'MakananController@tambah')->name('tambah');
    Route::post('/nambah', 'MakananController@nambah')->name('nambah');
    Route::get('/editmakanan/{id}', 'MakananController@edit')->name('edit');
    Route::put('/update/{id}', 'MakananController@update');
    Route::get('/deletemakanan/{id}', 'MakananController@delete');

    // Crud petugas
    Route::get('/tambahuser', 'AdminController@tambah')->name('tambahuser');
    Route::post('/nambahuser', 'AdminController@nambah')->name('nambahuser');
    Route::get('/edituser/{id}', 'AdminController@edit')->name('edit');
    Route::put('/updateuser/{id}', 'AdminController@update');
    Route::get('/deleteuser/{id}', 'AdminController@delete');
        

    // LAporan
    Route::get('/cetakpdf', 'MakananController@cetak_pdf')->name('cetakpdf');
    Route::get('/cetakpdfTransaksi', 'KasirController@orderanpdf')->name('cetakpdfTransaksi');
    Route::get('/cetakpdff', 'AdminController@cetak_pdf')->name('cetakpdff');    
});

Route::group(['middleware' => ['CekRole:kasir']], function(){
    //kasir
    Route::get('/dashboardkasir', 'KasirController@dashboardkasir')->name('dashboardkasir');
    // liat transaksi
    Route::get('/orderan', 'KasirController@orderan')->name('orderan');
    // ngorder
    Route::get('/ngorder', 'KasirController@index')->name('ngorder');
    // nyetak
    Route::get('/orderanpdf', 'KasirController@orderanpdf')->name('orderanpdf');
    Route::post('/beli', 'KasirController@beli')->name('beli');

    // Route::get('/cetakpdfTransaksi', 'MakananController@cetak_pdf')->name('cetakpdfTransaksi');
});
