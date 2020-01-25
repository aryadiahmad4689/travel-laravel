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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'Admin' ], function () {
    // pelanggan
    Route::get('/indexpelanggan','PelangganController@index')->name('indexpelanggan');
    Route::get('/tambahpelanggan/{id}/{id_tiket}','PelangganController@create')->name('tambahpelanggan');
    Route::post('/storepelanggan','PelangganController@store')->name('storepelanggan');
    Route::get('/editpelanggan','PelangganController@edit')->name('editpelanggan');

    // pememesanan
    Route::get('/indexpemesanan/{id}','PemesananController@index')->name('indexpemesanan');
    Route::get('/tambahpemesanan','PemesananController@create')->name('tambahpemesanan');
    Route::post('/storepemesanan','PemesananController@store')->name('storepemesanan');
    Route::get('/','PemesananController@create')->name('pesan');

    // pembayaran
    Route::get('/pembayaran','PembayaranController@index')->name('indexpembayaran');
   



    Route::group(['middleware' => ['auth']], function () {
        Route::group(['middleware' => ['superadmin']], function () {
    // Pembayaran
    Route::get('/daftarpembayaran','PembayaranController@daftar')->name('daftarpembayaran');
    Route::post('/store','PembayaranController@store')->name('storePembayaran');
    Route::get('/delete/{id}','PembayaranController@destroy')->name('deletePembayaran');

    // tiket
    Route::get('/tambahtiket','TiketController@create')->name('tambahtiket');
    Route::post('/storetiket','TiketController@store')->name('storetiket');
    Route::get('/tiket','TiketController@index')->name('indextiket');
    Route::delete('/delete/{id}','TiketController@destroy')->name('destroytiket');
    // detail pemesanan
    Route::get('/datapemesanan','PemesananController@datapemesanan')->name('datapemesanan');
    Route::get('/detailpemesanan/{id_tiket}/{id_penerbangan}','PemesananController@detailpemesanan')->name('detailpemesanan');
    Route::get('/search','PemesananController@search')->name('searchpemesanan');
    Route::put('/update/{id}','PemesananController@update')->name('updatepemesanan');
    Route::get('/edit/{id}','PemesananController@edit')->name('editPemesanan');


    


    

    // penerbangan
    Route::get('/tambahpenerbangan/{id}','DataPenerbanganController@create')->name('tambahpenerbangan');
    Route::post('/storepenerbangan','DataPenerbanganController@store')->name('storepenerbangan');
    Route::get('/penerbangan','DataPenerbanganController@index')->name('indexpenerbangan');



    });
});


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
